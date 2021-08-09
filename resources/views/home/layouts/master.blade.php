<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('home.includes.style')
</head>
<body>
<i id="scrollTop" class="fas fa-arrow-up" onclick="scrollToTop()"></i>
<header>
    @include('home.includes.nav')
    @includeWhen(Request::url() == route('home'),'home.includes.mainBaner')
</header>
@yield('content')
@include('home.includes.footer')
@include('home.includes.script')

</body>
</html>
