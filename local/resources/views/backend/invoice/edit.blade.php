@extends('layouts.backend')
@section('contents')

<!-- page content -->
      <div class="right_col" role="main">
        <div class="x_panel">
          @if (Session('status'))
               <div class="alert alert-success text-center">
                <strong>Invoice updated successfully</strong>
              </div>
          @endif
          <form class="form-horizontal form-label-left " action="{{route('invoice.update',$edit->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
          <div class="col-md-6 col-lg-6 col-sm-12">
           <h3>Add New invoice</h3>


           <!-- All Hidden div -->
           <input type="hidden" name="from_name" value="{{Auth::user()->name}}">
           <input type="hidden" name="from_address" value="{{Auth::user()->address}}">
           <input type="hidden" name="from_phone" value="{{Auth::user()->phone}}">
           <input type="hidden" name="from_email" value="{{Auth::user()->email}}">
           <input type="hidden" class="form-control" name="invoice_no" value="{{$edit->invoice_no}}"">
           <input type="hidden" id="subtotali" name="invoice_subtotal">
           <input type="hidden" id="qty" name="qty">
           <input type="hidden" id="total" name="total" value="">


            <!-- name -->
            <div class="form-group">
              <label>Bill to name</label>
              <input type="text" class="form-control" name="billto_name" placeholder="Enter Name" value="{{$edit->billto_name}}">
              @if($errors->has('billto_name'))
                <div style="color:red">{{$errors->first('billto_name')}}</div>
             @endif
            </div>

            <div class="form-group">
              <label>Bill to Address</label>
              <input type="text" class="form-control" name="billto_address" placeholder="Enter Address" value="{{$edit->billto_address}}">
              @if($errors->has('billto_address'))
                <div style="color:red">{{$errors->first('billto_address')}}</div>
             @endif
            </div>

            <div class="form-group">
              <label>Bill to Phone</label>
              <input type="text" class="form-control" name="billto_phone" placeholder="Enter Phone" value="{{$edit->billto_phone}}">
              @if($errors->has('billto_phone'))
                <div style="color:red">{{$errors->first('billto_phone')}}</div>
             @endif
            </div>



        </div>  <!-- end customer billing -->


        <div class="col-md-6 col-lg-6 col-sm-12">
          <h3>Invoice Properties</h3>

          <!-- Invoice Date -->
          <div class="form-group">
            <label>Invoice Date</label>
            <input type="text" id="datepicker" class="form-control" name="invoice_date" value="{{$edit->invoice_date}}">
            @if($errors->has('invoice_date'))
              <div style="color:red">{{$errors->first('invoice_date')}}</div>
           @endif
          </div>

          <!-- Invoice Number -->
          <div class="form-group">
            <label>Invoice Due Date</label>
            <input id="invoice_dutedate" type="text" class="form-control" name="invoice_dutedate" value="{{$edit->invoice_dutedate}}">

            @if($errors->has('invoice_dutedate'))
              <div style="color:red">{{$errors->first('invoice_dutedate')}}</div>
           @endif
          </div>

          <!-- Invoice Number -->
          <div class="form-group">
            <label>Invoice Number</label>
            <input type="text" class="form-control" value="{{$edit->invoice_no}}" disabled>
          </div>

        </div>


          <!-- Invoice Number -->
          <div class="form-group">
            <label>Invoice Note</label>
            <textarea name="invoice_note" rows="4" cols="80" class="form-control">{{$edit->invoice_note}}</textarea>
            @if($errors->has('invoice_note'))
              <div style="color:red">{{$errors->first('invoice_note')}}</div>
           @endif
          </div>
          <hr>
               <div class="row" style="margin-top:100px">
                   <div class="col-md-12">
                       <div class="table-responsive">
                           <table class="table table-bordered">
                               <thead>
                                   <tr class="item-row">
                                       <th>Item</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Total</th>
                                   </tr>
                               </thead>
                               <tbody>

                                 @foreach($items as $getitem)
                                 <tr class="item-row">
                                   <td class="item-name">
                                     <div class="delete-btn">
                                       <input type="text" class="form-control item" placeholder="Item Name" name="item_name[{{ $getitem->id }}]" value="{{$getitem->item_name}}">
                                       <a class="trash" href="javascript::void(0)" id="{{$getitem->id}}" title="Remove row">X</a></div>
                                     </td>
                                     <td>
                                       <input class="form-control price" placeholder="Price" type="number" name="item_price[{{ $getitem->id }}]" value="{{$getitem->item_price}}">
                                     </td>
                                     <td>
                                       <input class="form-control qty" placeholder="Quantity" type="number" name="item_qty[{{ $getitem->id }}]" value="{{$getitem->item_qty}}">
                                     </td>
                                     <td>
                                       <span class="total" id="itemtotal">0.00</span><input type="hidden" class="total" name="item_total[{{ $getitem->id }}]" value="{{$getitem->item_total}}">
                                     </td>

                                  </tr>
                                @endforeach


                               <!-- <tr id="hiderow">
                                   <td colspan="4">
                                       <a id="addRow" href="javascript:;"  title="Add a item" class="btn btn-primary">Add a item</a>
                                   </td>
                                   @if($errors->has('item_name'))
                                      <div style="color:red">{{$errors->first('item_name')}}</div>
                                   @endif
                               </tr> -->

                               <tr>
                                   <td></td>
                                   <td></td>
                                   <td class="text-right"><strong>Sub Total</strong></td>
                                   <td><span id="subtotal">0.00</span></td>


                               </tr>
                               <tr>
                                   <td><strong>Total Quantity: </strong><span id="totalQty" style="color: red; font-weight: bold">0</span> Units</td>

                                   <td></td>
                                   <td class="text-right"><strong>Discount</strong></td>
                                   <td><input class="form-control" id="discount" name="invoice_discount" value="0" type="text"></td>

                               </tr>
                               <tr>
                                   <td rowspan="2">
                                     <p class="text-muted well well-sm no-shadow">
                                    Payment Details: <br>
                                    Bank Name: Daj Bangla Bank <br>
                                    Account Name: Md.Shamim Hasan <br>
                                    Brach Name: Thakurgaon <br>
                                    Swift Code: DBBLBDDH <br>
                                    Account No: 263151106599</p>

                                  </td>
                                <td></td>
                                <td class="text-right"><strong>Shipping</strong></td>
                                <td><input class="form-control" id="shipping" name="invoice_shipping" value="0" type="text"></td>

                               </tr>
                               <tr>
                                   <td></td>

                                   <td class="text-right"><strong>Grand Total</strong></td>
                                   <td><span id="grandTotal">0</span></td>

                               </tr>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>


          <div class="form-group">
            <div class="col-md-2 col-md-offset-5">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>


        </form>













        </div>
      </div>
      <!-- /page content -->

<style media="screen">

    h4.panel-title a {
  display: block;
}
.panel-default>.panel-heading {
    color: #fff;
    background-color: #13bf9f;
    border-color: #fff;
}
.panel-heading{
  padding:0;
}
h4.panel-title a {
    display: block;
    height: 100%;
    padding: 16px 15px;
}
input.form-control {
    background: #f5f5f5;
    border: 1px solid #ccc;
    margin: 4px 0px;
}

input.form-control.price {
    font-size: 14px;
}

.delete-btn {
          position: relative;
      }

      .trash {
          display: block;
    color: #fff;
    text-decoration: none;
    position: absolute;
    background: #292424;
    font-weight: bold;
    padding: 0px 3px;
    border-radius: 50%;
    border: 1px solid;
    top: -9px;
    left: -6px;
    font-family: Verdana;
    font-size: 12px;
    height: 22px;
    width: 20px;
    text-align: center;
      }
    .alert{
      padding 0px !important;
    }


</style>


@section('custom-script')
   <script type="text/javascript">
   $("#addmore").click(function(){
     var $lastRow = $("[id$=blah] tr:not('.ui-widget-header'):last"); //grab row before the last row
     var $newRow = $lastRow.clone(); //clone it
     $newRow.find(":text").val(""); //clear out textbox values
     $lastRow.after($newRow); //add in the new row at the end
 });
   </script>



    <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                addRow : "#addRow",
                delete : ".delete",
                parentClass : ".item-row",

                price : ".price",
                qty : ".qty",
                total : ".total",
                totalQty: "#totalQty",

                subtotal : "#subtotal",
                discount: "#discount",
                shipping : "#shipping",
                grandTotal : "#grandTotal"

            });
        });
    </script>


  <script type="text/javascript">
       // subtotal
      function subtotal() {
       var value = document.getElementById("subtotal").textContent;
       $('#subtotali').val(value);
     }
    $('#subtotal').bind("DOMSubtreeModified",function(){
     subtotal();
    });

    function qty() {
     var value = document.getElementById("totalQty").textContent;
     $('#qty').val(value);
   }
    $('#totalQty').bind("DOMSubtreeModified",function(){
     qty();
    });



     // total
      function total() {
       var value = document.getElementById("grandTotal").textContent;
       $('#total').val(value);
     }
    $('#grandTotal').bind("DOMSubtreeModified",function(){
     total();
    });

            </script>


            <script>

              $('.trash').click(function(){
              var id=$(this).attr('id');
                 swal({
                   title: "Are you sure?",
                   text: "Do you really want to delete data!",
                   icon: "warning",
                   buttons: true,
                   dangerMode: true,
                 });
                $('.swal-button--confirm').click(function(){
                  var url='{{route("deleteitem",":id")}}';
                  url = url.replace(':id', id);
                  var csrf_token=$('meta[name="csrf-token"]').attr('content');

                  $.ajax({
                     url:url,
                     type:'get',
                     data:{'_method':'DELETE','_token': csrf_token },
                     success:function(data){
                       $('#msg').html('<div class="alert alert-success d-inline text-center bg-primary text-white" role="alert">Data Deleted Sucessfull</div>');
                         $('#'+id).closest("tr").hide();

                     }
                 });
               });

              });

            </script>

@endsection
@endsection
