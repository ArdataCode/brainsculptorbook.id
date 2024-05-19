<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;
use Carbon\Carbon;

class CreateTemplate extends Seeder
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
                'nama'=>'Brain Sculptor',
                'email'=>'brainsculptor@gmail.com',
                'no_hp'=>'0811111111',
                'alamat'=>'',
                'meta_desc'=>'',
                'meta_key'=>'',
                'tentang_kami'=>'',
                'logo_besar'=>'',
                'logo_kecil'=>'',
            ]
            ];
            foreach ($template as $key => $value) {
                Template::create($value);
            }
    }
}
