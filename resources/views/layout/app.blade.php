<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@include('layout.header')
@section('sidebar')

@show

<div class="container">
    @yield('content')
</div>
@include('layout.footer')
</body>
</html>