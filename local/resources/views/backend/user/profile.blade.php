@extends('layouts.backend')
@section('contents')






<!-- page content -->
    <div class="right_col" role="main">
      <div class="">
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
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
                <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                  <div class="profile_img">
                    <div id="crop-avatar">
                      <!-- Current avatar -->
                      @if(!empty($show->img))
                      <img class="img-responsive avatar-view" src="{{asset('local/public/contents/uploads/customer')}}/{{$show->img}}" alt="Avatar" title="Change the avatar">
                      @else
                     <img class="img-responsive avatar-view" src="{{asset('local/public/contents/backend/')}}/images/picture.jpg" alt="Avatar" title="Change the avatar">
                      @endif
                    </div>
                  </div>
  <br />
                  <a href="{{route('siteuser.edit',$show->id)}}" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a>
                  <br />



                </div>
                <div class="col-md-9 col-sm-9 col-xs-12">

                  <!-- start user projects -->
                  <table class="data table table-striped">
                    <tbody>
                      <tr>
                      <th>Name</th>
                      <td>{{$show->name}}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td>{{$show->email}}</td>
                      </tr>

                      <tr>
                        <th>Phone</th>
                        <td>{{$show->phone}}</td>
                      </tr>

                      <tr>
                        <th>City</th>
                        <td>{{$show->city}}</td>
                      </tr>

                      <tr>
                        <th>Refered By</th>
                        <td>{{$show->refered_by}}</td>
                      </tr>
                       <tr>
                        <th>Status</th>
                        <td>{{$show->status}}</td>
                      </tr>
                       <tr>
                        <th>Message</th>
                        <td>{{$show->note}}</td>
                      </tr>

                      <tr>
                        <th>NID Document</th>
                        <td>
                          @if($show->nid)
                            <img width="200" class="avatar-view" src="{{asset('local/public/contents/uploads/customer')}}/{{$show->nid}}">
                          @endif
                        </td>
                      </tr>

                      <tr>
                        <th>Signature</th>
                        <td>
                          @if($show->singature)
                            <img width="200" class="avatar-view" src="{{asset('local/public/contents/uploads/customer')}}/{{$show->singature}}">
                          @endif
                        </td>
                      </tr>

                    </tbody>
                  </table>
                  <!-- end user projects -->







                </div>
              </div>
            </div>
          </div>
        </div>
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
    </style>


@endsection
