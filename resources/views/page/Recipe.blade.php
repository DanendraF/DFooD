<!DOCTYPE html>
<html>
<head>
    <title>RECIPE</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('/assets/image/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/Rstyle.css') }}">
    
</head>
<body>

    @include('partials.navbar')

    <div class="card-container">
        <!-- Isi konten resep seperti yang sudah kamu buat -->
        <!-- Jangan lupa untuk update semua path gambar -->
        <div class="card">
            <img src="{{ asset('assets/image/Food/fishCips.jpg') }}">
            <div class="card-content">
                <h3>Fish and Chips</h3>
                <p>Fish and chips is a classic British dish made by battering and frying fish, 
                   served with crispy chips (fries) and often accompanied by mushy peas...</p>
                   <a href="{{ route('detail') }}" class="btn">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('assets/image/Food/Scarbonara.jpg') }}">
            <div class="card-content">
                <h3>Carbonara</h3>
                <p> Indulge in our rich and creamy carbonara, where tender spaghetti is tossed in a velvety egg sauce, 
                    infused with the savory essence of guanciale and Parmesan cheese. This classic Italian dish is a 
                    masterclass in simplicity, with each bite a perfect balance of textures and flavors. </p>
                    <a href="/recipe/detail" class="btn">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('assets/image/Food/fishCips.jpg') }}">
            <div class="card-content">
                <h3>Fish and Chips</h3>
                <p>Fish and chips is a classic British dish made by battering and frying fish, 
                   served with crispy chips (fries) and often accompanied by mushy peas...</p>
                <a href="/recipe/detail" class="btn">Read More</a>
            </div>
        </div>
        <div class="card">
            <img src="{{ asset('assets/image/Food/Scarbonara.jpg') }}">
            <div class="card-content">
                <h3>Carbonara</h3>
                <p> Indulge in our rich and creamy carbonara, where tender spaghetti is tossed in a velvety egg sauce, 
                    infused with the savory essence of guanciale and Parmesan cheese. This classic Italian dish is a 
                    masterclass in simplicity, with each bite a perfect balance of textures and flavors. </p>
                    <a href="/recipe/detail" class="btn">Read More</a>
            </div>
        </div>

        <!-- Card lainnya -->
    </div>

    <script src="{{ asset('js/Navbar.js') }}"></script>
</body>
</html>
