from django.conf.urls import patterns, include, url
from django.contrib import admin

urlpatterns = patterns('',
    # Examples:
    #url(r'^$', 'buybook.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

    url(r'^admin/', include(admin.site.urls)),

    url(r'^$', 'booking.views.index', name='index'),
    url(r'^index.html', 'booking.views.index', name='index'),
    url(r'^about.html', 'booking.views.about', name='about'),
    url(r'^login', 'booking.views.login_view', name='login_view'),
    url(r'^register.html', 'booking.views.register_view', name='register_view'),
    #url(r'^reg', 'booking.views.register', name='reg'),
    url(r'^userLogout.html', 'booking.views.logout_view', name='logout_view'),
    #url(r'^show', 'booking.views.show_color', name='color')
)
