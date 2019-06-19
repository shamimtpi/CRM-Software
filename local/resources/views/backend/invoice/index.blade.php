@extends('layouts.backend')

@section('contents')



<!-- page content -->
      <div class="right_col" role="main">
        <div class="">

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                 <a href="{{route('invoice.create')}}" class="btn btn-info"> <i class="fa fa-plus"></i> Add invoice</a>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                  <div id="msg"></div>
                  <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Invoice Id</th>
                        <th>Customer</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $x=0;?>
                      @foreach($getdata as $data)
                      <?php $x++;?>
                      <tr>
                        <td>{{$x}}</td>
                        <td>{{$data->invoice_no}}</td>
                        <td>{{$data->billto_phone}}</td>
                        <td>{{$data->billto_name}}</td>
                        <td>{{$data->created_at->format('M-d-y')}}</td>
                        <td>{{$data->total}}</td>
                        <td>{{$data->payment_status==0 ? 'Not Paid' : 'Paid'}}</td>
                        <td>
                          <a href="{{route('invoice.show',$data->id)}}" id="{{$data->id}}" class="btn btn-primary btn-xs viewdata"><i class="fa fa-folder"></i> View </a>
                          <a href="{{route('invoice.edit',$data->id)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                          <form action="#" method="post" style="display:inline">
                          <a href="javascript:void(0)" id="{{$data->id}}" class="trash btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </form>

                        </div>
                        </td>
                      </tr>
                      @endforeach


                    </tbody>
                  </table>
                </div>
              </div>
            </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
<a href="#" onclick="window.print()">print</a>



  @section('custom-script')
       <!-- Data selected -->
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
              var url='{{route("invoice.destroy",":id")}}';
              url = url.replace(':id', id);
              var csrf_token=$('meta[name="csrf-token"]').attr('content');

              $.ajax({
                 url:url,
                 type:'POST',
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
