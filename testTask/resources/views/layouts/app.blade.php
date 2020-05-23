<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Cut Link</title>
</head>
@include('includeLayouts.header')
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                @yield('content')
            </div>
        </div>
    </div>
@include('includeLayouts.errors')  
@include('includeLayouts.footer')
</body>
</html>