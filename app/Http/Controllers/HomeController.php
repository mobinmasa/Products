<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index()
    {
        // $users = DB::table("users")->get();
        // dd($users);
        // $users = User::all();
        // dd($users);
        // return view("homePage", compact('users'));
    }
}
