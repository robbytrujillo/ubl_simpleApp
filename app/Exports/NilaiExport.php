<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class NilaiExport implements FromCollection, WithHeadings
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect($this->data);
    }

    public function headings(): array
    {
        return [
            'No.',
            'NIM',
            'Nama',
            'Tugas',
            'UTS',
            'UAS',
            'Nilai Akhir',
            'Grade',
        ];
    }
}
