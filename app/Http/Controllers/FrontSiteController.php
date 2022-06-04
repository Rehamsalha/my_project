<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Contant as AppContant;
use Illuminate\Http\Request;

use App\Models\Contant;

class FrontSiteController extends Controller
{
    public function showHome(){
       //dd('welcome to home');
        return view('frontsite.home');
        //return redirect()->back();
    }
    public function showproducts(){

        $products= DB::table('posts')->get();
        return view('frontsite.products',compact('products'));



    }

    public function showabout(){

        return view('frontsite.about');

    }
    public function showcontact(Request $request){
        $contant= new AppContant();
    $contant->name=$request->name ;
    $contant->email=$request->email ;
    $contant->subject=$request->subject ;
    $contant->message=$request->message ;
    $contant->save();
    //return 'store';
    return redirect()->back();
        return view('frontsite.contact');

    }
}
