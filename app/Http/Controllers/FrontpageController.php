<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages;
use App\Likes;
use App\Comments;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\DB;

class FrontpageController extends Controller
{
    //

     public function index()
    {
        //   
       $packages = Packages::all();
       
       //dd($user);

       if(Auth::check()){
        $user_id=Auth::user()->id;
       //dd($user_id);
       $user=User::find($user_id);
       $comments = Comments::all();
       //dd($comments);


       
       $likes = Likes::where('user_id', '=', Auth::user()->id)->get();
       $unauthlikes = Likes::where('user_id', '!=', Auth::user()->id)->get();
       return view('frontpage.home',compact('packages','likes','unauthlikes','user','comments'));


      }
      else{

        return view('frontpage.home',compact('packages'));

      }


       //dd($likes);

        
         
    }
    public function getUser(Request $request){

       //dd($request);

         $user = User::where('id', '=', request('uid'))->get();
         //dd($user);
         return $user;   

    }
    public function about()
    {
        //   
       return view('frontpage.about');
    }
    public function tour()
    {
        //   
       return view('frontpage.tour');
    }
    public function hotel()
    {
        //   
       return view('frontpage.hotel');
    }
    public function blog()
    {
        //   
       return view('frontpage.blog');
    }
    public function contact()
    {
        //   
       return view('frontpage.contact');
    }

}
