<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getSingerData(
            $name = 'HA SUNG WOON',
            $description = 'Ha Sung-woon (Hangul: 하성운, lahir 22 Maret 1994) adalah penyanyi asal Korea Selatan'
        ) {
            $song = new Singer();
            $song->name = $name;
            $song->description = $description;
            $song->save();
        }
        getSingerData();
    }
}
