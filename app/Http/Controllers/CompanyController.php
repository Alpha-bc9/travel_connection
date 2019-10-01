<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Companies;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $companies = Companies::first();
        // dd($companies);
        return view('company.read',compact('companies'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return  view('company.create');

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

        // dd($request);

         $request->validate([
            "name" => 'required|min:5|max:191',
            "email" => 'required|unique:companies',
            "password" => 'required|min:8',
            "phone" => 'required|max:11',
            "address" => 'required',
            "logo" => 'required|mimes:jpeg,png',
            
        ]);
      

        //if file , upload
        if ($request->hasfile('logo')) 
        {
            $logo = $request->file('logo');
            $upload_path = public_path().'/storage/images/company';
            $name = $logo->getClientOriginalName();
            $logo -> move($upload_path,$name);
            $path = '/storage/images/company'.$name;//database

        }
        else
        {
            $path="";
        }
        return Companies::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => $request['password'],
            'phone' =>$request['phone'],
            'website' =>$request['website'],
            'address' =>$request['address'],
            'logo' =>$path        
        ]);

        return redirect()->route('company.index');
}

    

    /**
     * Display the specified resource.
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
        $companies=Companies::find($id);
        return  view('company.edit',compact('companies'));
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
         if ($request->hasfile('logo')) 
        {
            $logo = $request->file('logo');
            $upload_path = public_path().'/storage/images/';
            $name = $logo->getClientOriginalName();
            $logo -> move($upload_path,$name);
            $path = '/storage/images/'.$name;//database

        }
        else
        {
            $path=request('oldlogo');
        }
        //update
        $companies = Companies::find($id);
        $companies->name = request('name');
        $companies->email = request('email');
        $companies->password = request('password');
        $companies->phone = request('phone');
        $companies->website = request('website');
        $companies->address = request('address');
        $companies->logo = $path;
        $companies->save();

        //return redirect
        return redirect()->route('company.index');

    
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
