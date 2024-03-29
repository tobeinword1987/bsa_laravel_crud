<?php
    use Illuminate\Support\Facades\URL;
    use Illuminate\Support\Facades\Session;
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>

<body>
<div class="container">

    <nav class="navbar navbar-inverse">
        <ul class="nav navbar-nav">
            <li><a href="{{URL::to("users")}}">Users</a></li>
            <li><a href="{{URL::to("books")}}">Books</a></li>
        </ul>
    </nav>

    <h1>@yield('pagetitle')</h1>

    @if (Session::has('messages'))
        <div class="alert alert-info">{{Session::get('message')}}</div>
    @endif

    @yield('content')

</div>
</body>
</html>