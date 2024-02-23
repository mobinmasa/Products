<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use Illuminate\View\View;

class TagController extends Controller
{
    public function index():View
    {
        $tags = Tag::all();
        return view('tags.index' ,  compact('tags'));
    }

    public function create():View
    {
        return view('tags.create');
    }

    public function show(int $id)
    {
        $tag = Tag::query()->findOrFail($id);
        return view('tags.show' , compact('tag'));
    }

}
