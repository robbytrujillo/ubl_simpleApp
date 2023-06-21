<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MhsModel extends Model
{
    use HasFactory;
    
    public function allData() {
        return DB::table('mahasiswas')->get();
    }

    public function addData($data) {
        DB::table('mahasiswas')->insert($data);
    }

    public function getData($id) {
        return DB::table('mahasiswas')->where('nim', $id)->first();
    }

    public function updateData($id, $data) {
        return DB::table('mahasiswas')
                    ->where('nim', $id)
                    ->update($data);
    }

    public function deleteData($id) {
        return DB::table('mahasiswas')
                    ->where('nim', $id)
                    ->delete();
    }
}
