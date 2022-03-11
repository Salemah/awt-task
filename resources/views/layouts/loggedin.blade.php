<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div id="header">
            <a href="{{route('list')}}">List</a>
            <a href="{{route('create')}}">Create</a>
            <a href="{{route('get')}}">Get</a>
            <a href="{{route('login')}}">Login</a>
        </div>
        @yield('content')
        @yield('demo2')
        <div id="footer">&copy; Adv. Web Spring 2022</div>
    </body>
</html>
