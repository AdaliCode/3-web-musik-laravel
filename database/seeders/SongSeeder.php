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
        function getSong($title = "Gift", $album = 'Lovely Runner, Pt. 9 (Original Soundtrack)', $release = '2024-05-21', $minutes = 4, $second = 49)
        {
            $song = new Song();
            $song->title = $title;
            $song->release = $release;
            $song->album = $album;
            $song->minutes_duration = $minutes;
            $song->second_duration = $second;
            $song->save();
        }
        getSong();
        getSong('Dia Masa Lalumu, Aku Masa Depanmu', 'Dia Masa Lalumu, Aku Masa Depanmu', '2021-03-05', second: 2);
        getSong('May I Love You?', 'Lovely Runner, Pt. 4 (Original Soundtrack)', '2024-04-23', 3, 18);
        getSong('Sudden Shower', 'Lovely Runner, Pt. 1 (Original Soundtrack)', '2024-04-08', 3, 53);
        getSong('Shiny Star (2020)', 'Shiny Star(2020)', '2020-11-14', 3, 37);
        getSong('Niscaya', 'Niscaya', '2021-8-25', second: 58);
        getSong('Like A Dream', 'Lovely Runner, Pt. 3 (Original Soundtrack)', '2024-04-16', second: 9);
        getSong('A Day', 'Lovely Runner, Pt. 5 (Original Soundtrack)', '2024-04-30', 3, 52);
        getSong('Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', 'Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', '2024-04-26', second: 20);
        getSong('Spring is gone by the chance (우연히 봄)', '냄새를 보는 소녀 (SBS 수목드라마) OST', '2015-05-27', 3, 21);
    }
}
