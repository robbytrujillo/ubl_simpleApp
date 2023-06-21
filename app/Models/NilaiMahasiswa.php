<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class NilaiMahasiswa extends Model
{
    use HasFactory;

    public function allData() {
        return DB::table('nilai_mahasiswas')->get();
    }

    public function addData($data) {
        DB::table('nilai_mahasiswas')->insert($data);
    }

    public function getData($id) {
        return DB::table('nilai_mahasiswas')->where('kode_matkul', $id)->first();
    }

    public function updateData($id, $data) {
        return DB::table('nilai_mahasiswas')
                    ->where('nim', $id)
                    ->update($data);
    }

    public function deleteData($id) {
        return DB::table('nilai_mahasiswas')
                    ->where('nim', $id)
                    ->delete();
    }
    protected $table = 'nilai_mahasiswas';
    protected $fillable = ['nim', 'nama', 'mata_kuliah', 'tugas', 'uts', 'uas', 'grade'];
}
