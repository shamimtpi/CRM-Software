<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
  protected $table="invoices";
  protected $fillable=[
    'from_name',
    'from_address',
    'from_phone',
    'from_email',
    'billto_name',
    'billto_address',
    'billto_phone',
    'invoice_date',
    'invoice_dutedate',
    'invoice_no',
    'invoice_note',
    'invoice_subtotal',
    'invoice_discount',
    'invoice_shipping',
    'qty',
    'total',
    'signature',
    'payment_status',
  ];




public static function totalamount(){

    $getamount=invoice::get();



  $total=0;

  foreach($getamount as $cart){
  $total+= $cart->total;
}

  return $total;

}

  public function items()
  {
    return $this->hasMany(item::class, 'invoice_id', 'id');
  }
}
