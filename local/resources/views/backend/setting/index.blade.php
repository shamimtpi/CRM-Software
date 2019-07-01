@extends('layouts.backend')

@section('contents')

<!-- page content -->
      <div class="right_col" role="main">
        <div class="x_panel">
          @if (Session('status'))
               <div class="alert alert-success text-center">
                <strong>New user added successfully</strong>
              </div>
          @endif


          <form class="form-horizontal form-label-left" action="{{route('setting.update',1)}}" method="post">
            @csrf
            @method('put');

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Box Size <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" name="box_size" type="text" value="{{$edit->box_size}}">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Body Color <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" name="bodycolor" type="color" value="{{$edit->bodycolor}}">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Box Color <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" name="boxcolor" type="color" value="{{$edit->boxcolor}}">
            </div>
          </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Paymentinfo <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <textarea name="paymentinfo" rows="8" cols="80" class="form-control col-md-7 col-xs-12 myeditor">{{$edit->paymentinfo}}</textarea>
            </div>
          </div>


          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">

              <button id="send" type="submit" class="btn btn-success">Update</button>
            </div>
          </div>
        </form>



        </div>
      </div>
      <!-- /page content -->



@endsection

