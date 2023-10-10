<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/sktm/sktm.css">
    <title>Document</title>
</head>
<body>
    <h1>PEMERINTAH KOTA JAMBI</h1>
    <h1>KECAMATAN JAMBI LUAR KOTA</h1>
    <H1>KELURAHAN PIJOAN</H1>
    <hr>

    <h2 style="margin-top: 30px; Margin-bottom:2px; text-decoration: underline;">SURAT KETERANGAN TIDAK MAMPU</h2>
    <h2 style="margin-top: 1px">N O M O R : - / SKTM / IX / 2023</h2>

    <p style="margin-top: 40px">         Kelurahan Pijoan Kecamatan Jambi Luar Kota Dengan ini menerangkan bahwa:</p>

    <div style="display:inline-block">
        <p>Nama                     : {{$masyarakat->nama}}</p>
        <p>NIK                      : {{$masyarakat->nik}}</p>
        <p>Tempat / Tanggal Lahir   : {{$masyarakat->tempat_lahir}} / {{$masyarakat->tanggal_lahir}} </p>
        <p>Jenis Kelamin            :{{$masyarakat->jenis_kelamin}} </p>
        <p>Status Perkawinan: 
            {{$masyarakat->status_perkawinan == 1 ? 'Kawin' : 'Belum/Tidak Kawin'}}
        </p>
        <p>Pekerjaan                : {{$masyarakat->pekerjaan}}</p>
        <p>Agama                    : {{$masyarakat->agama}}</p>
        <p>Alamat                   : {{$masyarakat->alamat}}</p>
    </div>
    {{-- <p>Berdasarkan surat pengantar dari RT 005 RW 002 Reg.no : - / RT.005 / RW.002 / IX / 2023 Tanggal 4 September 2023,Bahwa benar keluarga bersangkutan tidakk mampu</p>
   <p>Surat Keterangan ini dinyatakan tidak berlaku apabila terjadi pelanggara,peraturan perundang-undangan dan Perda Kota Jambi serta apabila ada kekeliruan/kesalahan dalam pembuatannya,pemohon/pemegang siap mempertanggung jawabkan secara hukum tanpa melibatkan siapa pun</p>
    <p style="font-style:italic;font-weight:bold">surat ini berlaku untuk satu kali keperluan</p>
    <p>Demikian surat ini kami buat untuk digunakan semestinya</p> --}}
    <p class="indented">Berdasarkan surat pengantar dari RT 005 RW 002 Reg.no : - / RT.005 / RW.002 / IX / 2023 Tanggal 4 September 2023, bahwa benar keluarga bersangkutan tidak mampu.</p>
<p class="indented">Surat Keterangan ini dinyatakan tidak berlaku apabila terjadi pelanggaran peraturan perundang-undangan dan Perda Kota Jambi serta apabila ada kekeliruan/kesalahan dalam pembuatannya, pemohon/pemegang siap mempertanggung jawabkan secara hukum tanpa melibatkan siapa pun.</p>
<p  style="font-style: italic; font-weight: bold;">Surat ini berlaku untuk satu kali keperluan.</p>
<p class="indented">Demikian surat ini kami buat untuk digunakan semestinya.</p>
</body>
</html>