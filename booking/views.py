from django.shortcuts import render,render_to_response
from django.contrib.auth import authenticate, login, logout
from django.shortcuts import HttpResponse, redirect
from django.core.context_processors import csrf
from django import forms
from django.contrib.auth.forms import UserCreationForm
from booking.form import UserForm, UserProfileForm
# Create your views here.


def index(request):
    c = {}
    c.update(csrf(request))
    return render(request, "index.html", c)


def about(request):
    return render(request, "about.html")


def login_view(request):
    username = request.POST['username']
    password = request.POST['password']
    user = authenticate(username=username, password=password)
    if user is not None:
        if user.is_active:
            login(request, user)
            request.session.set_expiry(1800)
            # Redirect to a success page.
            #return render_to_response("index.html")
            return redirect(index)
            #return HttpResponse(request.user.is_authenticated())
        else:
            # Return a 'disabled account' error message
            return HttpResponse("disable account")
    else:
        # Return an 'invalid login' error message.
        return HttpResponse('invalid login')


def logout_view(request):
    logout(request)
    return render(request, "userLogout.html")


def register_view(request):
    # If it's a HTTP POST
    if request.method == 'POST':
        # Attempt to grab information from the raw form information.
        # Note that we make use of both UserForm and UserProfileForm.
        user_form = UserForm(data=request.POST)
        print(user_form.is_valid())
        profile_form = UserProfileForm(data=request.POST)
        print(profile_form.is_valid())

        # If the two forms are valid...
        if user_form.is_valid() and profile_form.is_valid():
            # Save the user's form data to the database.
            user = user_form.save()

            # Now we hash the password with the set_password method.
            # Once hashed, we can update the user object.
            user.save()
            print("user save")

            profile = profile_form.save(commit=False)
            profile.user = user

            profile.save()
            return redirect(index)
        else:
            print(user_form.errors, profile_form.errors)
    else:
        user_form = UserForm()
        profile_form = UserProfileForm()

    return render(request, "register.html", {
        'form': user_form, 'p_form': profile_form,
    })

