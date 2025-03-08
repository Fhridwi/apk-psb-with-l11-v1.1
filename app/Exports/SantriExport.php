<?php

namespace App\Exports;

use App\Models\Santri;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SantriExport implements FromCollection, WithMapping, WithStyles, WithColumnWidths
{
    public function collection()
    {
        return Santri::select('no_pendaftaran', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'status_pendaftaran')->get();
    }

    public function map($santri): array
    {
        return [
            $santri->no_pendaftaran,
            $santri->nama_lengkap,
            $santri->tempat_lahir,
            $santri->tanggal_lahir,
            $santri->status_pendaftaran,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:E1')->applyFromArray([
            'font' => ['bold' => true, 'size' => 12, 'color' => ['rgb' => 'FFFFFF']],
            'fill' => ['fillType' => 'solid', 'startColor' => ['rgb' => '4CAF50']],
            'alignment' => ['horizontal' => 'center', 'vertical' => 'center'],
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,  // Nomor Pendaftaran
            'B' => 30,  // Nama Lengkap
            'C' => 20,  // Tempat Lahir
            'D' => 15,  // Tanggal Lahir
            'E' => 20,  // Status Pendaftaran
        ];
    }
}


