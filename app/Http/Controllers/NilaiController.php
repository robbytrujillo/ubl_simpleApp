<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NilaiMahasiswa;
use PDF;
use Excel;

class NilaiController extends Controller
{
    public function index()
    {
        $data = [
            'nilai' => NilaiMahasiswa::all()
        ];
        return view('nilai.index', $data);
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'matakuliah' => 'required',
            'tugas' => 'required|numeric',
            'uts' => 'required|numeric',
            'uas' => 'required|numeric',
        ]);

        $nilai = new NilaiMahasiswa();
        $nilai->nim = $request->nim;
        $nilai->nama = $request->nama;
        $nilai->matakuliah = $request->matakuliah;
        $nilai->tugas = $request->tugas;
        $nilai->uts = $request->uts;
        $nilai->uas = $request->uas;
        $nilai->save();

        return redirect()->route('nilai.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }

    public function cetak(Request $request)
    {
        $this->validate($request, [
            'matakuliah' => 'required',
            'output' => 'required',
        ]);

        $matakuliah = $request->matakuliah;
        $output = $request->output;

        $nilai = NilaiMahasiswa::where('matakuliah', $matakuliah)->get();

        $data = [
            'matakuliah' => $matakuliah,
            'nilai' => $nilai,
        ];

        if ($output == 'pdf') {
            $pdf = PDF::loadView('nilai.pdf', $data);
            return $pdf->download('laporan_nilai.pdf');
        } elseif ($output == 'xls') {
            Excel::create('laporan_nilai', function ($excel) use ($data) {
                $excel->sheet('Sheet 1', function ($sheet) use ($data) {
                    $sheet->loadView('nilai.xls', $data);
                });
            })->download('xls');
        }
    }

    public function show($nim)
    {
        
        $nilai = [
            [
                'matakuliah' => 'RPL',
                'nim' => $nim,
                'nama' => 'Budi',
                'tugas' => 85,
                'uts' => 80,
                'uas' => 90,
                'nilai_akhir' => 87,
                'grade' => 'A'
            ],
            [
                'matakuliah' => 'Algoritma',
                'nim' => $nim,
                'nama' => 'Luhur',
                'tugas' => 75,
                'uts' => 85,
                'uas' => 70,
                'nilai_akhir' => 77,
                'grade' => 'B+'
            ]
        ];

        // Tampilkan tampilan cetak laporan nilai
        return view('cetak_laporan_nilai', compact('nilai'));
    }

    public function cetakLaporan()
{
    return view('nilai.cetak_laporan_nilai');
}

}
