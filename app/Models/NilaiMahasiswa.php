<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'nilai_mahasiswa';
    protected $fillable = ['nim', 'nama', 'matakuliah', 'tugas', 'uts', 'uas'];
}
