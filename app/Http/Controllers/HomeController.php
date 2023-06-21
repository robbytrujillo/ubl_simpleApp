<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MhsModel;

class HomeController extends Controller {
    public function __construct() {
        $this->MhsModel = new MhsModel();
    }

    public function index() {
        $data = [
            'mhs'=>$this->MhsModel->allData()
        ];
        return view('mhs_v', $data);
    }

    public function add() {
        return view('add_v');
    }

    public function insert() {
        $data = [
            'nim' => Request() -> vNIM,
            'nama' => Request() -> vNama,
            'alamat' => Request() -> vAlamat,
        ];
        $this->MhsModel->addData($data);
        return redirect()->to('/')->send()->with('message', 'Data '.Request()->vNIM.' Berhasil ditambah');
    }

    public function edit($id) {
        $data = ['mhs'=>$this->MhsModel->getData($id)];
        return view('edit_v', $data);
    }

    public function update(Request $request, $id) {
        $data = [
            'nim' => $request->input('vNIM'),
            'nama' => $request->input('vNama'),
            'alamat' => $request->input('vAlamat'),
        ];
        $this->MhsModel->updateData($id, $data);
        //return redirect()->to('/')->send()->with('message', 'Data '.$id.' Berhasil diupdate');
        return redirect('/')->with('message', 'Data '.$id.' Berhasil diupdate');
    }

    public function delete($id) {
        $this->MhsModel->deleteData($id);
        //return redirect()->to('/')->send()->with('message', 'Data '.$id.' Berhasil dihapus');
        return redirect('/')->with('message', 'Data '.$id.' Berhasil dihapus');
    }
}

?>