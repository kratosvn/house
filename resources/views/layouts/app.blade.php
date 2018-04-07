<html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
    @section('css')
    @endsection
</head>
<body>
<div class="container">
    @include('layouts.header')
    @include('layouts.search')
    <div>
        @include('layouts.sidebar')
        @include('layouts.body')
    </div>
</div>
@include('layouts.footer')

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
@yield('js')
</body>
</html>