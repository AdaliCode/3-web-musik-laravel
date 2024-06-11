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
        getSingerData('Vionita');
        getSingerData('UMJI', 'Kim Ye-won (Hangul: 김예원, Hanja atau Hanzi: 金藝源, lahir 19 Agustus 1998), lebih dikenal dengan nama panggungnya Umji (엄지), adalah penyanyi berkebangsaan Korea Selatan, ia mantan anggota dari grup GFriend yang telah bubar pada 22 Mei 2021. Saat ini debut sebagai anggota grup penyanyi wanita bersama 2 mantan anggota GFriend (Sinb dan Eunha), grup tersebut diberi nama Viviz.[1]');
        getSingerData('ECLIPSE');
        getSingerData('KyoungSeo');
        getSingerData('Bilal Indrajaya');
        getSingerData('MINNIE');
        getSingerData('JONG HO');
        getSingerData('Lyodra');
        getSingerData('유주 (YUJU)');
        getSingerData('Loco');
    }
}
