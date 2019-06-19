<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
  protected $table="items";
  protected $fillable =[
    'item_name',
    'item_price',
    'item_qty',
    'invoice_id',
    'item_total',
  ];
}
