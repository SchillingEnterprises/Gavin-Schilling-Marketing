from django.http import Http404
from django.shortcuts import render
from django.http import HttpResponse

from .models import User


def index(request):
    try:
        member = User.objects.get(pk=user_id)
    except User.DoesNotExist:
        raise Http404("User does not exist")
    return render(request, 'user/index.html', {'user': user})
