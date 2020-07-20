<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
    @include('inc.messages')
    @yield('content')
    
    </div>
    <footer id='footer' class='text-center'>Copy Rights</footer>
</body>
</html>