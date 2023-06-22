<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MatkulModel;
use App\Models\NilaiMahasiswa;
use PDF;
use Excel;

class NilaiController extends Controller
{
    public function index()
    {
        $nilaimhs = NilaiMahasiswa::all();
        $matkul = MatkulModel::all();
    
        return view('nilaimhs_v', compact('nilaimhs', 'matkul'));
    }
    public function cetakLaporan(Request $request)
    {
        $kodeMatkul = $request->input('kode_matkul');
        $outputType = $request->input('output_type');

        $matkul = MatkulModel::where('kode_matkul', $kodeMatkul)->first();

        if ($matkul) {
            $dataNilai = NilaiMahasiswa::where('kode_matkul', $kodeMatkul)->get();

            if ($outputType == 'pdf') {
                $pdf = PDF::loadView('laporan_nilai_pdf', compact('mata_kuliahs', 'dataNilai'));
                return $pdf->download($kodeMatkul . '.pdf');
            } elseif ($outputType == 'xls') {
                $data = [];
                foreach ($dataNilai as $index => $nilai) {
                    $data[$index]['No'] = $index + 1;
                    $data[$index]['NIM'] = $nilai->nim;
                    $data[$index]['Nama'] = $nilai->mahasiswa->nama;
                    $data[$index]['Tugas'] = $nilai->tugas;
                    $data[$index]['UTS'] = $nilai->uts;
                    $data[$index]['UAS'] = $nilai->uas;
                    $data[$index]['Nilai Akhir'] = $nilai->nilai_akhir;
                    $data[$index]['Grade'] = $nilai->grade;
                }

                return Excel::download(new \App\Exports\NilaiExport($data), $kodeMatkul . '.xls');
            }
        }

        return redirect()->back()->with('message', 'Data tidak ditemukan.');
    }



}
