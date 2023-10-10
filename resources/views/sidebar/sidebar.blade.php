{{-- <div class="sidebar">
    <h2>Surat Desa Cerdas</h2>
    
    <ul>
        <li><a href="/">Beranda</a></li>
        @auth
        <li><a href="/data">Data warga</a></li>
        <li><a href="/tambah">Tambah Data Warga</a></li>
        @endauth
        {{-- <li><a href="#"></a></li>
        <li><a href="#">Kontak</a></li> --}}
    {{-- </ul> --}}
{{-- </div> --}}
<nav class="navbar">
    <div class="logo">
        <img src="/img/log.png" alt="">
        
    </div>
    <ul class="nav-links">
        <li><a href="/">Beranda</a></li>
        <li><a href="#">Profil Desa</a></li>
        <li><a href="#">pengaduan masyarakat</a></li>
        @auth
        <li><a href="/data">Data Warga</a></li>
        {{-- <li><a href="/logout">logout</a></li> --}}
        <li><form action="/logout" method="POST">
            @csrf
            <button type="submit" style="background:#3498db;border:none;color:white;font-size:15px">Logout</button>
        </form>
        </li>
     

 
            
        @else
        <li><a href="/login">login</a></li>
  
        @endauth
        
     
    </ul>
</nav>

<style>body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}
img{
    height: 100px;
  
}

.sidebar {
    height: 100%;
    width: 150px;
    position: fixed;
    top: 0;
    left: 0;
    background-color: #333;
    padding-top: 10px;
    text-align: center;
}

.sidebar h2 {
    color: white;
    text-align: center;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar li {
    padding: 10px;
    text-align: center;
}

.sidebar a {
    text-decoration: none;
    color: white;
    display: block;
}

.sidebar a:hover {
    background-color: #555;
}



/* Membuat tampilan sidebar responsif */
@media screen and (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: static;
        background-color: #333;
    }

    .content {
        margin-left: 0;
    }
}

/* Reset margin dan padding untuk menghindari margin dan padding bawaan */
body,
ul {
    margin: 0;
    padding: 0;
}

/* Gaya dasar untuk navbar */
.navbar {
    background-color: #3498db;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 20px;
}

/* Gaya logo */
.logo img {
    max-height: 40px;
}

/* Gaya daftar tautan navigasi */
.nav-links {
    list-style: none;
    display: flex;
    gap: 20px;
}

/* Gaya tautan navigasi */
.nav-links li {
    font-size: 18px;
}

.nav-links a {
    text-decoration: none;
    color: #fff;
    transition: color 0.3s ease;
}

.nav-links a:hover {
    color: #ecf0f1;
}
</style>