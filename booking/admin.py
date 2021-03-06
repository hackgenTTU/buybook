from django.contrib import admin
from django.contrib.auth.admin import UserAdmin
from django.contrib.auth.models import User

# Register your models here.

from booking.models import UserProfile

# Define an inline admin descriptor for Student model
# which acts a bit like a singleton


class UserInline(admin.StackedInline):
    model = UserProfile
    can_delete = False
    verbose_name_plural = 'user_profile'

# Define a new User admin


class UserAdmin(UserAdmin):
    inlines = (UserInline, )

# Re-register UserAdmin
admin.site.unregister(User)
admin.site.register(User, UserAdmin)