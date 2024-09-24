<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESEP MAKANAN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="{{ asset('/assets/image/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('/assets/css/Hstyle.css') }}">
</head>
<body>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    
    <div class="banner">
        <!-- Include the navbar partial here -->
        @include('partials.navbar')

        <div class="content">
            <h1 class="paar">FOOD DRINK RECIPES</h1>
            <p class="par">Find your favorite food and drink recipes here</p>
            <div>
                <a href="/recipe" class="button-link"><button type="button"><span></span>EXPLORE</button></a>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/Navbar.js') }}"></script>
</body>
</html>
