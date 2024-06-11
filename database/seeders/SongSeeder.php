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
        function getSong($title = "Gift", $album = 1, $minutes = 4, $second = 49)
        {
            $song = new Song();
            $song->title = $title;
            $song->album_id = $album;
            $song->minutes_duration = $minutes;
            $song->second_duration = $second;
            $song->save();
        }
        getSong();
        getSong('Dia Masa Lalumu, Aku Masa Depanmu', 2, second: 2);
        getSong('May I Love You?', 3, 3, 18);
        getSong('Sudden Shower', 4, 3, 53);
        getSong('Shiny Star (2020)', 5, 3, 37);
        getSong('Niscaya', 6, second: 58);
        getSong('Like A Dream', 7, second: 9);
        getSong('A Day', 8, 3, 52);
        getSong('Tak Selalu Memiliki (Ipar Adalah Maut Original Soundtrack)', 9, second: 20);
        getSong('Spring is gone by the chance (우연히 봄)', 10, 3, 21);
    }
}
