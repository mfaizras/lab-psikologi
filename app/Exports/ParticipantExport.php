<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ParticipantExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Registration::all()->makeHidden(['cv_path', 'krs_path', 'photo_path', 'student_card_path','identity_path','score_path','certificate_path','deleted_at','created_at','updated_at']);
    }

    public function headings(): array
    {
        return [
            'No',
            'NPM',
            'Nama',
            'Kelas',
            'Jurusan',
            'Lokasi Kampus',
            'Tempat Lahir',
            'Tanggal Lahir',
            'Gender',
            'Alamat',
            'Nomor HP',
            'Email',
            'Posisi',
            'IPK Terakhir'
        ];
    }
}
