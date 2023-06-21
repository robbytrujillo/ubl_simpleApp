<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatkulModel;

class MatkulController extends Controller {
    public function __construct() {
        $this->MatkulModel = new MatkulModel();
    }

    public function index() {
        $data = [
            'matkul'=>$this->MatkulModel->allData()
        ];
        return view('matkul_v', $data);
    }

    public function add_matkul() {
        return view('add_matkul_v');
    }

    public function insert_matkul() {
        $data = [
            'kode_matkul' => Request() -> vKODEMATKUL,
            'mata_kuliah' => Request() -> vMATAKULIAH,
        ];
        $this->MatkulModel->addData($data);
        return redirect()->to('/matkul')->send()->with('message', 'Data '.Request()->vKODEMATKUL.' Berhasil ditambah');
    }

    public function edit_matkul($id) {
        $data = ['matkul'=>$this->MatkulModel->getData($id)];
        return view('edit_matkul_v', $data);
    }

    public function update_matkul(Request $request, $id) {
        $data = [
            'kode_matkul' => $request->input('vKODEMATKUL'),
            'mata_kuliah' => $request->input('vMATAKULIAH'),
            ];
        $this->MatkulModel->updateData($id, $data);
        //return redirect()->to('/')->send()->with('message', 'Data '.$id.' Berhasil diupdate');
        return redirect('/matkul')->with('message', 'Data '.$id.' Berhasil diupdate');
    }

    public function delete_matkul($id) {
        $this->MatkulModel->deleteData($id);
        //return redirect()->to('/')->send()->with('message', 'Data '.$id.' Berhasil dihapus');
        return redirect('/')->with('message', 'Data '.$id.' Berhasil dihapus');
    }
}

?>