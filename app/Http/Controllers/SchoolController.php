<?php

namespace App\Http\Controllers;

use App\Models\school;
use App\Models\viewschool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loadschool()
    {
        return view('addschool');
    }


    function loadshowschool()
    {
        $data= school::all();

       return view('showschools',['school'=>$data]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function regschool(Request $request)
    {
        $request->validate([
            'name'          =>  'string|required|min:2',
            'address'          =>  'string|required',
            'city'          => 'string|required',
            'state'          =>  'string|required',
            'contact'          =>  'required|max:10',
            'image'         =>  'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'email_id'         =>  'string|max:100|required|email|unique:schools'
        ]);

        $file_name = time() . '.' . request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images'), $file_name);

        $schools = new school;

        $schools->name = $request->name;
        $schools->address = $request->address;
        $schools->city = $request->city;
        $schools->state = $request->state;
        $schools->contact = $request->contact;
        $schools->image = $file_name;
        $schools->email_id = $request->email_id;

        $schools->save();

        return back()->with('success', 'schools Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
  
}
