<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));

    }

    public function create(): View
    {
        $users = User::all();
        return view('posts.create', compact('users'));
    }

    public function show(int $id)
    {
        $post = Post::query()->findOrFail($id);
        return view('posts.show', compact('post'));

    }


    public function store(StorePostRequest $request)
    {
        Product::create([
            'title' => $request->get('title'),
            'content' => $request->get('content'),

        ]);

        return redirect(route('posts.index'));
    }

}




//Post::query()->create([
//    'title' => request('title'),
//    'content' => request('content'),
//    'user_id' => request('user_id')
//]);
//   dd($request->all());
