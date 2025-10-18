from django.urls import path
from . import views

urlpatterns = [
    path('', views.portfolio, name='index'),
    path('repos', views.repos, name='repos')
]