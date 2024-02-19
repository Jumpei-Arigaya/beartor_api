<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::with('genre:id,name')->get(['id', 'title', 'url', 'genre_id']);

        return response()->json([
            'songs' => $songs,
        ], 200);
    }
}
