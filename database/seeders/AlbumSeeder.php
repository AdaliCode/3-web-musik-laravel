<?php

namespace Database\Seeders;

use App\Models\Album;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getAlbumData($name = 'Lovely Runner, Pt. 9 (Original Soundtrack)', $type = 'Single', $release = '2024-05-21')
        {
            $album = new Album();
            $album->name = $name;
            $album->type = $type;
            $album->release = $release;
            $album->save();
        }
        getAlbumData();
        getAlbumData('Dia Masa Lalumu, Aku Masa Depanmu', release: '2021-03-05');
        getAlbumData('Lovely Runner, Pt. 4 (Original Soundtrack)', release: '2024-04-23');
        getAlbumData('Lovely Runner, Pt. 1 (Original Soundtrack)', release: '2024-04-08');
        getAlbumData('Shiny Star(2020)', release: '2020-11-14');
        getAlbumData('Niscaya', release: '2021-8-25');
        getAlbumData('Lovely Runner, Pt. 3 (Original Soundtrack)', release: '2024-04-16');
        getAlbumData('Lovely Runner, Pt. 5 (Original Soundtrack)', release: '2024-04-30');
        getAlbumData('Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', release: '2024-04-26');
        getAlbumData('냄새를 보는 소녀 (SBS 수목드라마) OST', release: '2015-05-27');
    }
}
