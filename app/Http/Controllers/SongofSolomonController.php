<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongofSolomonController extends Controller
{
    const BOOK_NAME = 'Song of Solomon';
    const BIBLE_VERS = 'King James Version';
    const CHAPTERS = 8;

    public function index()
    {
        return view ('index', [
            'bible_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERS,
            'num_of_chapters' => static::CHAPTERS
        ]);
    }

    public function readByChapter($chapter_num)
    {
        return view('chapter-read', [
            'bible_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERS,
            'num_of_chapters' => static::CHAPTERS,
            'chapter_num' => $chapter_num
        ]);
    }

    public function allChapters()
    {
        return view('readchapters', [
            'bible_name' => static::BOOK_NAME,
            'bible_version' => static::BIBLE_VERS,
            'num_of_chapters' => static::CHAPTERS
        ]);
    }
}
