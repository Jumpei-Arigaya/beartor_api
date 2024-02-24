<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'title' => 'test',
                'owner' => 1,
                'url' => '2',
                'genre_id' => 1,
            ],
            [
                'id' => 2,
                'title' => 'gdxgw',
                'owner' => 1,
                'url' => '1',
                'genre_id' => 1,
            ],
        ];

        foreach ($data as $item) {
            Song::create($item);
        }
    }
}
