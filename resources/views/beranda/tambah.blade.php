

<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="/css/beranda/tambah.css">
</head>
<body>
  <div class="container" style=>
   
    
    <form action="/register" method="POST">
        @csrf
        <img src="/images/logo.png" alt="" class="logo">
        <h2>tambah data masyarakat</h2>
        <div class="form-group">
            <label for="no_kk">No. KK</label>
            <input type="text" id="no_kk" name="no_kk" placeholder="No. KK">
        </div>
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik" placeholder="NIK">
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" id="name" name="nama" placeholder="Nama">
        </div>
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir">
        </div>
        
        <div class="form-group">
            <label for="status_perkawinan">Status Perkawinan:</label>
            <select name="status_perkawinan" id="status_perkawinan" required>
                <option value="1">Kawin</option>
                <option value="0">Belum Kawin</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select id="jenis_kelamin" name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
            <label for="pekerjaan">Pekerjaan</label>
            <input type="text" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
        </div>
        <div class="form-group">
            <label for="agama">Agama</label>
            <input type="text" id="agama" name="agama" placeholder="Agama">
        </div>
        <div class="form-group">
            <label for="rt">RT</label>
            <input type="text" id="rt" name="rt" placeholder="RT">
        </div>
        <div class="form-group">
            <label for="rw">RW</label>
            <input type="text" id="rw" name="rw" placeholder="RW">
        </div>
       
        <div class="form-group">
            <button type="submit">Daftar</button>
        </div>
    </form>
    
  </div>
</body>
</html>
