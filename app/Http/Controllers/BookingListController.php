<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Bookings;
use App\Packages;
use App\User;


class BookingListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings=Bookings::all();
        //
        // $departureName=DB::table('bookings')
        //         ->join('packages','bookings.package_id','=','packages.id')
        //         ->join('cities','packages.departure','=','cities.id')
        //         ->select('cities.name as departureName')
        //         ->get();

        // $destiantionName=DB::table('bookings')
        //         ->join('packages','bookings.package_id','=','packages.id')
        //         ->join('cities','packages.destination','=','cities.id')
        //         ->select('cities.name as citiesName')
        //         ->get();
        
        // $bookings=DB::table('bookings')
        //         ->join('packages','bookings.package_id','=','packages.id')
        //         ->join('users','bookings.user_id','=','users.id')
        //         ->select('bookings.*','users.email as useremail','','packages.name as packagename')
        //         ->get();

               
        //return view('booking.read',compact('bookings'),compact('departureName'),compact('destiantionName'));

        return view('booking.read',compact('bookings'));

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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    public function update($id, Request $request)
    {
       // dd($request);
        $booking = Bookings::find($id);
        $booking->booking_status = request('id');

        $booking->save();

      
       return 'success';
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

    public function bookingupdate(Request $request)
    {
        $id=$request['id'];
        $bookingrq=$request['booking'];


        $booking = Bookings::find($id);
       


        $booking->booking_status = "$bookingrq";

        $booking->save();

      
       return 'success';

    }
}
