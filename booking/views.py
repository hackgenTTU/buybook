from django.shortcuts import render,render_to_response
from django.contrib.auth import authenticate, login, logout
from django.shortcuts import HttpResponse, redirect
from django.core.context_processors import csrf
from django import forms
from django.contrib.auth.forms import UserCreationForm
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
    if request.method == 'POST':
        form = UserCreationForm(request.POST)
        if form.is_valid():
            new_user = form.save()
            return redirect(index)
    else:
        form = UserCreationForm()
    return render(request, "register.html", {
        'form': form,
    })

