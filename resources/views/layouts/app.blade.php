<!DOCTYPE html>
<html lang="nl">
<head>
 <title>@yield('title')</title>
</head>
<body>
 @include('partials.nav')
 <div>
 @yield('content')
 </div>
</body>
</html>
