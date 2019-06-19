


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">
	  <link rel="icon" href="images/favicon.ico" type="image/ico" />
    <title>Admin Area</title>
    <link href="{{asset('local/public/contents/backend')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
     <!-- sweet alert -->
    <script src="{{asset('local/public/contents/backend')}}/js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- FullCalendar -->
    <link href="{{asset('local/public/contents/backend')}}/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="{{asset('local/public/contents/backend')}}/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">


    <!-- Custom Theme Style -->
    <link href="{{asset('local/public/contents/backend')}}/build/css/custom.min.css" rel="stylesheet">
    <link href="{{asset('local/public/contents/backend')}}/build/css/overwrite.css" rel="stylesheet">
  </head>

  <body class="nav-md" style="background:{{$setting->bodycolor}}">
    <div class="container body" style="width:{{$setting->box_size}}px">
      <div class="main_container">


  <div class="top_nav">
    <div class="nav_menu">
        <nav class="navbar navbar-default" style="background-color:{{$setting->boxcolor}};border-color:transparent">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#">Brand</a> -->

            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-left">
                <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Deshboard</a></li>
                <li><a href="{{route('siteuser.index')}}"><i class="fa fa-user"></i> Users</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-heart"></i> Client <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('customer.index')}}">All Client</a></li>
                    <li><a href="{{route('customer.create')}}">Add New Client</a></li>
                  </ul>
                </li>

                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-bell"></i> Invoice <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{route('invoice.index')}}">All Invoice </a></li>
                    <li><a href="{{route('invoice.create')}}">Add New invoice</a></li>

                  </ul>
                </li>

                <li class="dropdown">
                  <a href="{{route('setting.index')}}"> <i class="fa fa-cog"></i> Setting </a>
                </li>



              </ul>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    @if(!empty(Auth::user()->img))
                    <img src="{{asset('local/public/contents/uploads/customer')}}/{{Auth::user()->img}}">
                    @else
                      <img src="{{asset('local/public/contents/backend')}}/images/img.jpg">
                    @endif
                    @if(Auth::check()){{Auth::user()->name}}@endif
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="{{route('siteuser.show',auth::user()->id)}}"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li>  <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </ul>
                </li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>



  </div>
  </div>




        <!-- /top navigation -->

        @yield('contents')

        <!-- footer content
        <footer>
          <div class="pull-right">
            Technical Support-<a style="color:#ba2525" href="https://softdevltd.com">softdevltd</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        /footer content -->
      </div>


     <style media="screen">
       .top_nav .navbar-right{
         width:20%
       }
       .navbar{
         border-radius:0 !important;
       }
       .navbar-default{
         border-color: none !important
       }
      .navbar-nav.navbar-left .open .dropdown-menu{
         left:0
       }
       .nav.navbar-nav>li>a{
         color:#FFF !important
       }
       .nav-md .container.body .right_col{
         padding: 10px 0px;
         border:5px solid {{$setting->boxcolor}}
       }
       .top_nav .nav .open>a, .top_nav .nav .open>a:focus, .top_nav .nav .open>a:hover, .top_nav .nav>li>a:focus, .top_nav .nav>li>a:hover{
         background: transparent
       }
       .nav_menu{
         border-bottom:none;
       }
       body{
         background:#008abb;
         padding:20px 0px
       }


     </style>

    <!-- jQuery -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- FullCalendar -->
   <script src="{{asset('local/public/contents/backend')}}/vendors/moment/min/moment.min.js"></script>
   <script src="{{asset('local/public/contents/backend')}}/vendors/fullcalendar/dist/fullcalendar.min.js"></script>


    <!-- Datatables -->
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{asset('local/public/contents/backend')}}/vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="{{asset('local/public/contents/backend')}}/build/js/custom.min.js"></script>
       <script src="{{asset('local/public/contents/backend')}}/js/jquery.invoice.js"></script>

    @yield('custom-script')

    <script>
    $( function() {
      $( "#datepicker" ).datepicker();
      $( "#invoice_dutedate" ).datepicker();
    } );
    </script>

  </body>
</html>
