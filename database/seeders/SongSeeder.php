<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        function getSong($title = "Gift", $singer = 'HA SUNG WOON', $album = 'Lovely Runner, Pt. 9 (Original Soundtrack)', $release = '2024-05-21', $duration = '4:49')
        {
            $song = new Song();
            $song->title = $title;
            $song->release = $release;
            $song->singer = $singer;
            $song->album = $album;
            $song->duration = $duration;
            $song->save();
        }
        getSong();
        getSong('Dia Masa Lalumu, Aku Masa Depanmu', 'Vionita', 'Dia Masa Lalumu, Aku Masa Depanmu', '2021-03-05', '4:02');
        getSong('May I Love You?', 'UMJI', 'Lovely Runner, Pt. 4 (Original Soundtrack)', '2024-04-23', '3:18');
        getSong('Sudden Shower', 'ECLIPSE', 'Lovely Runner, Pt. 1 (Original Soundtrack)', '2024-04-08', '3:53');
        getSong('Shiny Star (2020)', 'KyoungSeo', 'Shiny Star(2020)', '2020-11-14', '3:37');
    }
}
