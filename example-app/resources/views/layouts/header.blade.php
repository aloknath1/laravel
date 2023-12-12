
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
       <link rel="stylesheet" href="{{url('/')}}/css/style.css">
    </head>
    <body class="wscubetech antialiased">
        <div class="header">
            <img src="{{ URL::to('/images/wscube-tech-logo.svg') }}" alt="wscubetech" class="logo"/>
            <nav class="navigation">
                <ul class="main-navigation">
                    <li><a href="{{url('/')}}/">Home</a></li>
                    <li><a href="{{url('/')}}/about">About</a></li>
                    <li><a href="{{url('/')}}/services">Services</a></li>
                    <li><a href="{{url('/')}}/contact">Contact</a></li>
                    <li><a href="{{url('/')}}/register">Register</a></li>
                </ul>
                <ul class="lang">
                    <li><a href="{{url('/')}}/">English</a></li>
                    <li><a href="{{url('/')}}/rus">Russia</a></li>
                </ul>
            </nav>            
        </div>