from django.shortcuts import render

def portfolio(request):
    return render(request, 'portfolio.html')

def repos(request):
    return render(request, 'repos.html')
