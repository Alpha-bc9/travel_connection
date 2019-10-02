<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Packages;
use App\Likes;
use Illuminate\Support\Facades\Auth;


class LikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $packages = Packages::all();
        //dd($packages);
        return view('home',compact('packages'));
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function getLikeCount(Request $request){
        $getlikecount=Likes::where('packages_id',request('pid'))
                                        
                    ->get();
                    return $getlikecount;
    }

    public function getLike(Request $request)
    {
        //
       // dd(request('pid'));
         
        $countlike =Likes::where('packages_id',request('pid'))
                    ->where('user_id',Auth::user()->id)
                    ->get();
       if($countlike->count()==1){




                    $like =Likes::where('packages_id',request('pid'))
                                ->where('user_id',Auth::user()->id)
                                ->first();

                    
                    //dd($like->count);

                    if($like->count==1) {              
                    

                    $like->packages_id=request('pid');
                    $like->count=0;
                    $like->user_id=Auth::user()->id;
                    $like->save();
                   // dd($like);

                }
                else{
                     
                    $like->packages_id=request('pid');
                    $like->count=1;
                    $like->user_id=Auth::user()->id;
                
                    $like->save();

                    //dd($like);

                }


       }else{


                $like=Likes::create([
                    "packages_id"=>request('pid'),
                    "user_id"=>Auth::user()->id,            
                    "count"=>1         
                ]);



       }




        
        return $like;

            
           
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          
    }

     /** Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
