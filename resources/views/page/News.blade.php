<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News - Food Updates</title>
    <link rel="icon" href="{{ asset('assets/image/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('assets/css/Nstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/Rstyle.css') }}">
</head>
<body>

    @include('partials.navbar')
    
    <div class="news-container">
        <div class="news-item">
            <img src="assets/image/Food/pancake.jpg" alt="News 1" class="news-image">
            <div class="news-content">
                <div class="news-title">Mengenal Kuliner Tradisional Indonesia yang Mendunia di Tahun 2024</div>
                <div class="news-meta">34 menit yang lalu</div>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/image/Food/pancake.jpg" alt="News 2" class="news-image">
            <div class="news-content">
                <div class="news-title">Tren Makanan Sehat 2024: Dari Plant-Based Hingga Fermentasi Alami</div>
                <div class="news-meta">1 jam yang lalu</div>
            </div>
        </div>
        <div class="news-item">
            <img src="assets/image/Food/pancake.jpg" alt="News 3" class="news-image">
            <div class="news-content">
                <div class="news-title">Restoran Berbintang Michelin Mulai Sajikan Menu Ramah Lingkungan</div>
                <div class="news-meta">Artikel Rekomendasi</div>
            </div>
        </div>
    </div>
</body>
</html>