@extends('layouts.backend')
@section('contents')



<!-- page content -->
       <div class="right_col" role="main">
         <div class="">


           <div class="row">
             <div class="col-md-12">
               <div class="x_panel">
                 <div class="x_content">
                   <section class="content invoice">
                     <!-- title row -->

                     <div class="row">
                       <div class="col-xs-12 invoice-header">
                         <h1>
                         <i class="fa fa-globe"></i> Invoice.
                         <small class="pull-right">Date: {{$show->invoice_date}}</small>
                     </h1>
                       </div>
                       <!-- /.col -->
                     </div>
                     <!-- info row -->
                     <div class="row invoice-info">
                       <div class="col-sm-4 invoice-col">
                         From
                         <address>
                             <strong>{{$show->from_name}}</strong>
                             <br> {{$show->from_address}}
                             <br>Phone: {{$show->from_phone}}
                             <br>Email: {{$show->from_email}}
                         </address>
                       </div>
                       <!-- /.col -->
                       <div class="col-sm-4 invoice-col">
                          To
                         <address>
                           <strong>{{$show->billto_name}}</strong>
                           <br>Phone: {{$show->billto_phone}}
                           <br>Address: {{$show->billto_address}}
                       </address>
                       </div>
                       <!-- /.col -->
                       <div class="col-sm-4 invoice-col">
                         <b>Invoice {{$show->invoice_no}}</b>
                         <br>
                         <b>Payment Due:</b> {{$show->invoice_date}}
                         <br>
                         <b>Account:</b> 968-34567
                       </div>
                       <!-- /.col -->
                     </div>
                     <!-- /.row -->
                     <p><b>Note:</b> <i><{{$show->invoice_note}}</i></p>
                     <!-- Table row -->
                     <div class="row">
                       <div class="col-xs-12 table">
                         <table class="table table-striped">
                           <thead>
                             <tr>
                               <th>No</th>
                               <th>Title</th>
                               <th>Qty</th>

                               <th style="width: 30%">Total</th>
                               <th>Created At</th>
                             </tr>
                           </thead>
                           <tbody>
                             <?php $i=0;?>
                             @foreach($items as $item)
                             <?php $i++;?>
                             <tr>
                               <td>{{$i}}</td>
                                <td>{{$item->item_name}}</td>
                               <td>{{$item->item_qty}}</td>
                               <td>{{$item->item_total}}</td>
                               <td>{{$item->created_at}}</td>

                             </tr>
                            @endforeach


                           </tbody>
                         </table>
                       </div>
                       <!-- /.col -->
                     </div>
                     <!-- /.row -->

                     <div class="row">
                       <!-- accepted payments column -->
                       <div class="col-xs-6">
                         <p class="lead">Payment Methods:</p>
                         <p class="text-muted well well-sm no-shadow">
                         {!! $setting->paymentinfo !!}</p>
                       </div>
                       <!-- /.col -->
                       <div class="col-xs-6">
                         <p class="lead">Amount Due {{$show->invoice_dutedate}}</p>
                         <div class="table-responsive">
                           <table class="table">
                             <tbody>
                               <tr>
                                 <th style="width:50%">Subtotal:</th>
                                 <td>${{$show->invoice_subtotal}}</td>
                               </tr>
                               <tr>
                                 <th>Discount</th>
                                 <td>${{$show->invoice_discount}}</td>
                               </tr>
                               <tr>
                                 <th>Shipping:</th>
                                 <td>${{$show->invoice_shipping}}</td>
                               </tr>
                               <tr>
                                 <th>Total:</th>
                                 <td>${{$show->total}}</td>
                               </tr>
                             </tbody>
                           </table>
                         </div>
                       </div>
                       <!-- /.col -->
                     </div>
                     <!-- /.row -->

                     <!-- this row will not appear when printing -->
                     <div class="row no-print">
                       <div class="col-xs-12">
                         <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                         <a class="btn btn-primary pull-right" href="{{route('experpdf',$show->id)}}">Expoert Pdf</a>
                       </div>
                     </div>
                   </section>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
       <!-- /page content -->



@endsection
