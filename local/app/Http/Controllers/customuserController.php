<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\user_role;
use Session;
use Hash;
use Image;
class customuserController extends Controller
{

  public function __construct(){
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getdata=user::with('user_role')->orwhere('role_id',2)->orwhere('role_id',1)->get();
        return view('backend.user.index',compact('getdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $UserRole=user_role::get();
      return view('backend.user.create',compact('UserRole'));
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
       $show=user::find($id);
       return view('backend.user.profile',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit=user::find($id);
      return view('backend.user.edit',compact('edit'));
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

      $getdata=user::where('id', $id)->FirstorFail();
       $input=$request->all();

       $this->validate($request,[
         'name' => 'max:255',
         'email' => 'email|max:255',
         'password' =>'string|min:8',
          'img' => 'max:5124',
          'nid' => 'max:5100',
          'singature' => 'max:5100',
         ],[
       'img.max' => 'Maximum Upload size 5MB',
       'nid.max' => 'Maximum Upload size 5MB',
       'singature.max' => 'Maximum Upload size 5MB',
       'name.required' => 'Name is required',
       'email.required' => 'Email is required',
       'email.unique' => 'This Eemail has already taken',
       'password.min' => 'Password minimum lenght 8 character',
         ]);


         if($request->hasFile('img')){
           $image=$request->file('img');
           $imageName='profile_photo'.'_'.time().'.'.$image->getClientOriginalExtension();
           Image::make($image)->save(base_path('public/contents/uploads/customer/'.$imageName));
            $input['img']=$imageName;
           if($getdata->img){
              if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->img)) {
                unlink(public_path().'/contents/uploads/customer/'.$getdata->img);
              }
            }
         }




      // Nid Card
     if($request->hasFile('nid')){
       $image=$request->file('nid');
       $imageName='nid'.'_'.time().'.'.$image->getClientOriginalExtension();
       Image::make($image)->save(base_path('public/contents/uploads/customer/'.$imageName));
        $input['nid']=$imageName;
        if($getdata->nid){
        if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->nid)) {
            unlink(public_path().'/contents/uploads/customer/'.$getdata->nid);
           }
         }
     }


     // sigature
    if($request->hasFile('singature')){
      $image=$request->file('singature');
      $imageName='singature'.'_'.time().'.'.$image->getClientOriginalExtension();
      Image::make($image)->save(base_path('public/contents/uploads/customer/'.$imageName));
       $input['singature']=$imageName;
       if($getdata->singature){
       if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->singature)) {
           unlink(public_path().'/contents/uploads/customer/'.$getdata->singature);
       }
      }
    }

   if($getdata->password!==$input['password']){
      $input['password'] = Hash::make($input['password']);
   }


     $updatedata=$getdata->fill($input)->save();
        if($updatedata){
         Session::flash('status','value');
           return redirect()->back();
       }else{
         Session::flash('error','value');
           return redirect()->back();
       }






    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $getdata=user::where('id', $id)->FirstorFail();
      user::destroy($id);

      // profile Photo
      if($getdata->img){
         if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->img)) {
           unlink(public_path().'/contents/uploads/customer/'.$getdata->img);
         }
       }

       // NID
         if($getdata->nid){
       if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->nid)) {
           unlink(public_path().'/contents/uploads/customer/'.$getdata->nid);
          }
        }



        if($getdata->singature){
        if (file_exists(public_path().'/contents/uploads/customer/'.$getdata->singature)) {
            unlink(public_path().'/contents/uploads/customer/'.$getdata->singature);
        }
       }




    }
}
