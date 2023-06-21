<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MatkulModel extends Model
{
    use HasFactory;
    
    public function allData() {
        return DB::table('mata_kuliahs')->get();
    }

    public function addData($data) {
        DB::table('mata_kuliahs')->insert($data);
    }

    public function getData($id) {
        return DB::table('mata_kuliahs')->where('kode_matkul', $id)->first();
    }

    public function updateData($id, $data) {
        return DB::table('mata_kuliahs')
                    ->where('kode_matkul', $id)
                    ->update($data);
    }

    public function deleteData($id) {
        return DB::table('mata_kuliahs')
                    ->where('kode_matkul', $id)
                    ->delete();
    }

    protected $table = 'mata_kuliahs';
    protected $primaryKey = 'id';
}
