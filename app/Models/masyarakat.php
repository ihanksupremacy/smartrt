<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakats';
    protected $fillable = [
        'no_kk',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'status_perkawinan',
        'jenis_kelamin',
        'alamat',
        'pekerjaan',
        'agama',
        'rt',
        'rw',
    ]; 
}
