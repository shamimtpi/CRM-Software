<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use App\invoice;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totaluser=user::orwhere('role_id',2)->orwhere('role_id',1)->count();
        $totalclient=user::where('role_id',3)->count();
        $invoice=invoice::count();
        $gettotal=invoice::get();
        $total=0;
        foreach($gettotal as $getsdata){
        $total+= $getsdata->total;
        }
         $total;
        return view('backend.index',compact('totaluser','totalclient','invoice','total'));
    }
}
