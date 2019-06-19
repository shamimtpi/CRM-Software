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


          <form class="form-horizontal form-label-left" action="{{route('siteuser.store')}}" method="post">
            @csrf
          <div class="item form-group bad">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="text" value="{{old('name')}}">
            </div>
            @if($errors->has('name'))
              <div class="alert">{{$errors->first('name')}}</div>
           @endif


        </div>

          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="email" id="email" name="email" value="{{old('email')}}" required="required" class="form-control col-md-7 col-xs-12">
              @if($errors->has('email'))
                <div class="error">{{$errors->first('email')}}</div>
              @endif
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="passowrd" id="passowrd" name="password" required="required" class="form-control col-md-7 col-xs-12">
              @if($errors->has('password'))
                <div class="error">{{$errors->first('password')}}</div>
              @endif
            </div>
          </div>
          <div class="item form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><span class="required">Confirm Password</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <input type="password" id="email" name="password_confirmation" required="required" class="form-control col-md-7 col-xs-12">
            </div>
          </div>

          <div class="form-group">
               <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Custom</label>
               <div class="col-md-6 col-sm-6 col-xs-12">
                 <select class="select2_single form-control" tabindex="-1" name="role_id">
                   @foreach($UserRole as $data)
                   <option value="{{$data->id}}">{{$data->title}}</option>
                   @endforeach
                 </select>
               </div>
             </div>


          <div class="ln_solid"></div>
          <div class="form-group">
            <div class="col-md-6 col-md-offset-3">
              <button type="submit" class="btn btn-primary">Cancel</button>
              <button id="send" type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>
        </form>



        </div>
      </div>
      <!-- /page content -->



@endsection
