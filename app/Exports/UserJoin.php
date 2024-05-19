<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class UserJoin implements FromCollection , WithHeadings , ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('name','email','no_wa','alamat')->where('user_level','2')->get();
    }

    public function headings(): array
    {
        return [
            'Nama',
            'Email',
            'WhatsApp',
            'Kota',
        ];
    }
}
