<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Session;
use Carbon\Carbon;
use Image;
use Hash;
class customerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdata=user::orderBy('id','DESC')->where('role_id',3)->get();
        return view('backend.customer.index',compact('getdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input=$request->all();
      $this->validate($request,[
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' =>'required|string|min:8|confirmed',
        ],[
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'email.unique' => 'This Eemail has already taken',
      'password.required' => 'Password is required',
      'password_confirmation.required' => 'Password is required',
        ]);
      $input['role_id'] = '3';
      $input['password'] = Hash::make($input['password']);
      $store=user::create($input);
      if($store){
        Session::flash('status','value');
        return redirect()->back();
      }else{
       Session::flash('errors','value');
        return redirect()->back();
      }

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


    }
}
