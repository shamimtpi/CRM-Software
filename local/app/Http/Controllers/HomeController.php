<?php

namespace App\Http\Controllers;

use App\user;
use App\invoice;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    public function calendarData(Request $request)
    {
        $start = Carbon::parse($request->start)->format('Y-m-d');
        $end = Carbon::parse($request->end)->format('Y-m-d');
        $data = invoice::whereBetween('created_at', [$start, $end])->get();

        $result = [];

        foreach ($data as $key => $value) {
            $result[$key] = [
                'start' => $value->created_at,
                'end' => $value->created_at,
                'title' => $value->billto_name,
                'className' => 'bg-red',
                'allDay' => true
            ];
        }

        return response()->json($result, 200, [], JSON_PRETTY_PRINT);
    }
}
