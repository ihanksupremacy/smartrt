<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/result/style.css">
    <title>Sidebar Example</title>
</head>
<body>
@include('sidebar.sidebar')
<div class="content">
    

    <form action="{{ route('search.result') }}" method="GET" class="search">
        <input type="text" name="query" placeholder="Cari pengguna atau postingan...">
        <button type="submit">Cari</button>
    </form>
<h1>daftar masyarakat</h1>
@foreach ($masyarakats as $masyarakat)  
    <div class="masyarakat">
        <div class="data">
            <p>{{$masyarakat->nama}}</p>
            <a href="/sktm/{{$masyarakat->id}}">sktm</a>
            <a href="/statusperkawinan/{{$masyarakat->id}}">status perkawinan</a>
            <a href="/bebaspajak/{{$masyarakat->id}}">bebas pajak</a>
        </div>
    </div>
@endforeach

</div>
</body>
</html>
