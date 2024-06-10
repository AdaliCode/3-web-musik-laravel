<?php

namespace Database\Seeders;

use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SyncSingerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // song sync singer
        function syncSinger($songId = 3, $syncSinger = 3)
        {
            $song = Song::find($songId);
            $song->singers()->sync($syncSinger);
        }
        syncSinger();
        syncSinger(1, 1);
        syncSinger(2, 2);
        for ($i = 3; $i < 10; $i++) {
            syncSinger($i, $i);
        }
        syncSinger(10, [10, 11]);
    }
}
