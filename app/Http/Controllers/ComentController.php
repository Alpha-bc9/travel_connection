<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Packages;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //dd($request);
        
        $comments=Comments::create([

            "user_id"=>Auth::user()->id,
            "package_id"=>request('packageid'),
            "description"=>request('commentname'),
            

        ]);



          

       return redirect()->route('homepage')->with('status','Successfully Register! Create Group!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response



     */


    public function getComment(Request $request){

       //dd($request);

        // $comments = Comments::where('package_id', '=', request('pid'))->get();

         $comments = DB::table('comments')
         ->join('users','users.id','=','comments.user_id')
         ->select('users.*','comments.*')
         ->where('package_id', '=', request('pid'))
         ->get();
         //dd($comments);
         return $comments;   

    }
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
