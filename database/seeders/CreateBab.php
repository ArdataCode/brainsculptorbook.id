<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;
use Carbon\Carbon;

class CreateBab extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $template = [
        [
            'judul'=>'KOMIK',
            'foto'=>'image/global/section5/content1.png',
            'foto_m'=>'image/global/section5/content1.png',
        ],
        [
            'judul'=>'ULASAN',
            'foto'=>'image/global/section5/content1.png',
            'foto_m'=>'image/global/section5/content1.png',
        ],
        [
            'judul'=>'CATATAN UNTUK MOMS',
            'foto'=>'image/global/section5/content1.png',
            'foto_m'=>'image/global/section5/content1.png',
        ],
        [
            'judul'=>'BRAIN SCULPTORS GUIDE',
            'foto'=>'image/global/section5/content1.png',
            'foto_m'=>'image/global/section5/content1.png',
        ],
        [
            'judul'=>'TEA FOR MOMS',
            'foto'=>'image/global/section5/content1.png',
            'foto_m'=>'image/global/section5/content1.png',
        ]
        ];
        foreach ($template as $key => $value) {
            Slider::create($value);
        }
    }
}
