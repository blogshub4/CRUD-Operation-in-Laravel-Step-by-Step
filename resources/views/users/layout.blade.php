<html>
    <head>

        <title>
{{ config('app.name','Laravel') }}
</title>
<script src="{{ asset('js/app.js')}}"></script>
<link href="{{ asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
    @yield('content')
    </div>

</body>
</html> 