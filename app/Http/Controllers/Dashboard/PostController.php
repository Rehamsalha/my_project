<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        //        $posts = Post::all();
     // $posts = Post::orderBy('created_at','desc')->get();

       /* Session::put('course','STW');
        //dd(Session::get('course'));
        if(Session::has('course')){
            dd('session course found');
        }*/
      //  Cookie::queue('college','IT', 60*24*2);

     $posts = Post::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.posts.index',compact('posts'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories =Category::all();
        return view('dashboard.posts.create',compact('categories'));
      //  dd($posts);
//    $posts = Post::orderBy('created_at','desc')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->toArray());
      $request->validate([
           'title' => 'required|max:50',
           'code'=>'required|unique:posts|integer',
           'body' => 'required',
           'category_id' => 'required|integer',
           'author_email' => 'required|email'
        ]);
        $rules = [
            'title' => 'required|max:50',
            'code'=>'required|unique:posts|integer',
            'body' => 'required',
            'category_id' => 'required|integer',
            'author_email' => 'required|email',
            'post_image' => 'required|mimes:jpeg,png,bmp,jpg'
        ];


        $messages = [
            'title.required' => 'The Post title field should be entered',
            'title.max' => 'Title should not be more than 50 character',
            'code.unique' => 'Post code should not duplicated'
        ];

        $validator = Validator::make($request->all(),$rules,$messages);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        //dd($request->toArray());
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->code = $request->code;
        $post->category_id = $request->category_id;
        $post->author_email = $request->author_email;

        $postImage = $request->file('post_image');
        $fileName = time().'.'.$postImage->extension();
        $postImage->move('post_images',$fileName);


        $post->feature_image = $fileName;
        $post->large_image = $fileName;
        $post->save();

        return redirect()->route('dashboard.posts.index')->with('success','Post created successffuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        $categories = Category::all();
        return view('dashboard.posts.edit',compact('post','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, post $post)
    {
        //dd($request->toArray());

        $post->title = $request->title;
        $post->body = $request->body;
        $post->category_id = $request->category_id;

        $post->save();

        return redirect()->route('dashboard.posts.index');
    }

      /*
     Remove the specified resource from storage.

     @param  \App\post  $post
      @return \Illuminate\Http\Response
      */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect()->route('dashboard.posts.index');
    }
}
