<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index() {
        $songs = collect([
            [
                'id' => 1,
                'title' => 'River',
                'artist' => 'Miley Cyrus',
                'album' => 'Endless Summer Vocation',
                'duration' => [
                    'minutes' => 3,
                    'seconds' => 20
                ]
            ],
            [
                'id' => 2,
                'title' => 'Song for You',
                'artist' => 'Lee Isaacs',
                'album' => 'After the Apocalypses',
                'duration' => [
                    'minutes' => 2,
                    'seconds' => 48
                ]
            ],
            [
                'id' => 3,
                'title' => "คำถามซึ่งไร้คนตอบ",
                'artist' => 'Getsunova',
                'album' => 'The First Album',
                'duration' => [
                    'minutes' => 4,
                    'seconds' => 29
                ]
            ],
        ]);
        return view('songs.index', [
            'title' => 'Song Playlist',
            'songs' => $songs,
        ]);
    }
}
