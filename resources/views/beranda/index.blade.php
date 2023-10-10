<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/beranda/style.css">
    <title>Sidebar Example</title>
</head>
<body>
   
@include('sidebar.sidebar')

    <div class="content" >
        <h1></h1>
        <div style="background: #3498db;padding:2px;width:1000px;padding-left:20px;margin-bottom:50px;text-align:center;">
        <p style="font-size: 30px">Selamat datang di situs web kami.</p>
        <p>website ini adalah website yang melayani pembuatan surat melalui online yang berbasis template</p></div>
        <form action="{{ route('search.result') }}" method="GET" class="search">
            <input type="text" name="query" placeholder="Cari Masyarakat">
            <button type="submit">Cari</button>
        </form>
    </div>
    <div class="artikel">
        <h1>Artikel Desa</h1>
        <div class="kartu">
            <img src="gambar1.jpg" alt="Gambar Artikel 1">
            <h2>Judul Artikel 1</h2>
        </div>
        <div class="kartu">
            <img src="gambar2.jpg" alt="Gambar Artikel 2">
            <h2>Judul Artikel 2</h2>
        </div>
        <div class="kartu">
            <img src="gambar3.jpg" alt="Gambar Artikel 3">
            <h2>Judul Artikel 3</h2>
        </div><div class="kartu">
            <img src="gambar1.jpg" alt="Gambar Artikel 1">
            <h2>Judul Artikel 1</h2>
        </div>
        <div class="kartu">
            <img src="gambar2.jpg" alt="Gambar Artikel 2">
            <h2>Judul Artikel 2</h2>
        </div>
        <div class="kartu">
            <img src="gambar3.jpg" alt="Gambar Artikel 3">
            <h2>Judul Artikel 3</h2>
        </div><div class="kartu">
            <img src="gambar1.jpg" alt="Gambar Artikel 1">
            <h2>Judul Artikel 1</h2>
        </div>
        <div class="kartu">
            <img src="gambar2.jpg" alt="Gambar Artikel 2">
            <h2>Judul Artikel 2</h2>
        </div>
        <div class="kartu">
            <img src="gambar3.jpg" alt="Gambar Artikel 3">
            <h2>Judul Artikel 3</h2>
        </div>
    </div>
    
</body>
</html>
