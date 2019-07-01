<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
use App\user;
use App\invoice;
use App\item;
use Session;
use PDF;
class invoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $getdata=invoice::orderBy('id','DESC')->get();
        return view('backend.invoice.index',compact('getdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.invoice.create');
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
        'billto_name' => 'required',
        'billto_address' => 'required',
        'billto_phone' => 'required',
        'invoice_note' => 'required',
        'invoice_date' => 'required',
        'invoice_dutedate' => 'required',
        'item_name' => 'required',
        ],[
        'billto_name.required' => 'Name is required',
        'billto_address.required' => 'Address is required',
        'billto_phone.required' => 'Address is required',
        'invoice_note.required' => 'Description is required',
        'invoice_date.required' => 'Date is required',
        'invoice_dutedate.required' => 'DueDate is required',
        'item_name.required' => 'Add Item',
          ]);

    $store=invoice::create($input);
    $product_name = $request->item_name;
    $product_price = $request->item_price;
    $product_qty = $request->item_qty;
    $item_total = $request->item_total;

    foreach ($product_name as $index => $name) {
      $item = new item();
      $item->fill([
          'item_name' => $product_name[$index],
          'item_price' => $product_price[$index],
          'item_qty' => $product_qty[$index],
          'invoice_id' =>$store->id,
          'item_total' => $item_total[$index],
      ])->save();
    }


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
        $show=invoice::find($id);
        $items=item::where('invoice_id',$id)->get();
        return view('backend.invoice.show',compact('show','items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $edit=invoice::find($id);
      $items=item::where('invoice_id',$id)->orderBy('id','DESC')->get();
      return view('backend.invoice.edit',compact('edit','items'));
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


      $getdata=invoice::where('id', $id)->FirstorFail();
      $input=$request->all();

      $this->validate($request,[
        'billto_name' => 'required',
        'billto_address' => 'required',
        'billto_phone' => 'required',
        'invoice_note' => 'required',
        'invoice_date' => 'required',
        'invoice_dutedate' => 'required',
        'item_name' => 'required',
        ],[
        'billto_name.required' => 'Name is required',
        'billto_address.required' => 'Address is required',
        'billto_phone.required' => 'Address is required',
        'invoice_note.required' => 'Description is required',
        'invoice_date.required' => 'Date is required',
        'invoice_dutedate.required' => 'DueDate is required',
        'item_name.required' => 'Add Item',
          ]);

    $updatedata=$getdata->fill($input)->save();

      foreach ($request->item_name as $index => $name) {
        $trash=item::where('id',$index)->update([
          'item_name' => $request->item_name[$index],
          'item_price' => $request->item_price[$index],
          'item_qty' => $request->item_qty[$index],
          'invoice_id' =>$id,
          'item_total' => $request->item_total[$index],
        ]);

      }





      if($updatedata){
        Session::flash('status','value');
        return redirect()->back();
      }else{
       Session::flash('errors','value');
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
      $getdata=invoice::where('id', $id)->FirstorFail();
      invoice::destroy($id);
      item::where('invoice_id',$id)->delete();

    }



    public function deleteitem($id){
      item::where('id',$id)->delete();
    }

    public function experpdf($id){
      $show=invoice::find($id);
      $items=item::where('invoice_id',$id)->get();
      $pdf = PDF::loadView('backend.invoice.pdfinvoice',compact('show','items'));
      return $pdf->download('invoice.pdf');

    }






}
