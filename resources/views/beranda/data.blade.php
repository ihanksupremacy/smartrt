<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/data/style.css">
    <title>Sidebar Example</title>
</head>
<body>
@include('sidebar.sidebar')
<div class="content">
    

    <form action="/caridata" method="GET" class="search">
        <input type="text" name="query" placeholder="Cari pengguna atau postingan...">
        <button type="submit">Cari</button>
    </form>
<h1>daftar masyarakat</h1>

<table border="1">
    <thead>
        <tr>
            <th>no</th>
            <th>No. KK</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Status Perkawinan</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Pekerjaan</th>
            <th>Agama</th>
            <th>RT</th>
            <th>RW</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @php
        $counter = 1; // Initialize the counter
        @endphp
        @foreach ($masyarakats as $masyarakat)  
        <tr>
            <td>{{$counter}}</td>
            <td>{{$masyarakat->no_kk}}</td>
            <td>{{$masyarakat->nik}}</td>
            <td>{{$masyarakat->nama}}</td>
            <td>{{$masyarakat->tempat_lahir}}</td>
            <td>{{$masyarakat->tanggal_lahir}}</td>
            <td> @if ($masyarakat->status_perkawinan == 1)
                Kawin
            @else
                Belum/Tidak Kawin
            @endif</td>
            <td>{{$masyarakat->jenis_kelamin}}</td>
            <td>{{$masyarakat->alamat}}</td>
            <td>{{$masyarakat->pekerjaan}}</td>
            <td>{{$masyarakat->agama}}</td>
            <td>{{$masyarakat->rt}}</td>
            <td>{{$masyarakat->rw}}</td>
            <td><a href="/edit/{{$masyarakat->id}}" class="edit">edit</a></td>
            <td class="hapus"><form action="/hapus/{{$masyarakat->id}}" method="POST">
                @csrf
                <button type="submit">Hapus</button>
            </form></td>
        </tr>
        @php
        $counter++; // Increment the counter for each row
        @endphp
        @endforeach
        <!-- Anda dapat menambahkan lebih banyak data di sini -->
    </tbody>
</table>



</div>
</body>
</html>
