<?php

namespace Database\Seeders;

use App\Models\Song;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getSong($title = "Gift", $singer = 'HA SUNG WOON', $album = 'Lovely Runner, Pt. 9 (Original Soundtrack)', $release = '2024-05-21', $minutes = 4, $second = 49)
        {
            $song = new Song();
            $song->title = $title;
            $song->release = $release;
            $song->singer = $singer;
            $song->album = $album;
            $song->minutes_duration = $minutes;
            $song->second_duration = $second;
            $song->save();
        }
        getSong();
        getSong('Dia Masa Lalumu, Aku Masa Depanmu', 'Vionita', 'Dia Masa Lalumu, Aku Masa Depanmu', '2021-03-05', second: 2);
        getSong('May I Love You?', 'UMJI', 'Lovely Runner, Pt. 4 (Original Soundtrack)', '2024-04-23', 3, 18);
        getSong('Sudden Shower', 'ECLIPSE', 'Lovely Runner, Pt. 1 (Original Soundtrack)', '2024-04-08', 3, 53);
        getSong('Shiny Star (2020)', 'KyoungSeo', 'Shiny Star(2020)', '2020-11-14', 3, 37);
        getSong('Niscaya', 'Bilal Indrajaya', 'Niscaya', '2021-8-25', second: 58);
        getSong('Like A Dream', 'MINNIE', 'Lovely Runner, Pt. 3 (Original Soundtrack)', '2024-04-16', second: 9);
        getSong('A Day', 'JONG HO', 'Lovely Runner, Pt. 5 (Original Soundtrack)', '2024-04-30', 3, 52);
        getSong('Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', 'Lyodra', 'Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', '2024-04-26', second: 20);
    }
}
