<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Berita</title>
    <link rel="stylesheet" href="{{ asset('/assets/css/DAstyle.css') }}">
</head>
<body>

    <h2>Daftar Berita</h2>

    <table>
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Judul Berita</th>
                <th>Isi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $item)
                <tr>
                    <td><img src="{{ $item->gambar }}" alt="{{ $item->judul_berita }}"></td>
                    <td>{{ $item->judul_berita }}</td>
                    <td>{{ Str::limit($item->isi, 100) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>