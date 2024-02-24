<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SongResource;
use App\Models\Song;

class SongController extends Controller
{
    public function  index()
    {
        return SongResource::collection(Song::with('genre')->get());
    }
}
