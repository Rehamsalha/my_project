<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

  public function index(){
    // Eloquent
     $tasks=Post::all();
}

public function store(Request $request){

    DB::table('posts')->insert([
     'name' => $request->title ,
     'body' => $request->body,
     'code' => $request->code ,
    'created_at' => now(),
    'updated_at' => now()
      ]);
}
}
