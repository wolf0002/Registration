<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = Registration::all();
        return view('pages.index')->with('registers', $registers);
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
        $request->session()->put('fail', 'Registration Failed!!!');
         $validate=Validator::make($request->all(),[
             'name'=>'string|required',
             'rollno'=>'required|max:13|min:10|numeric',
             'branch'=>'required|string',
             'gender'=>'required|string',
             'year'=>'required',
             'email'=>'required|email',
             'phone'=>'required|digit:10|numeric',
             'hosteller'=>'required|string',
         ]);
        $registration= new Registration();
        $registration->name=$request['name'];
        $registration->rollno=$request['rollno'];
        $registration->branch=$request['branch'];
        $registration->gender=$request['gender'];
        $registration->year=$request['year'];
        $registration->email=$request['email'];
        $registration->phone=$request['phone'];
        $registration->hosteller=$request['hosteller'];
        $registration->save();  
        $request->session()->put('success', 'You have successfully registered ;)');
        $request->session()->forget('fail');
        return redirect('/registration');
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
