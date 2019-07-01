
@extends('layouts.backend')
@section('contents')
<!-- page content -->
<div class="right_col" role="main">
  <div class="x_panel">
    <div class="x_title">
  <!-- top tiles -->
      <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Users</span>
          <div class="count blue">{{$totaluser}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-clock-o"></i>Total Client</span>
          <div class="count green">{{$totalclient}}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Tota Invoice</span>
          <div class="count green">{{$invoice}}</div>
      </div>
      <div class="col-md-4 col-sm-6 col-xs-6 tile_stats_count">
        <span class="count_top"><i class="fa fa-user"></i> Total Invoice Amount</span>
        <div class="count blue">{{$total}}</div>
      </div>

      </div>
      <!-- /top tiles -->




      <div class="row">
        <div class="col-md-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Calendar Events <small>Sessions</small></h2>
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

              <div id='invoice-calendar'></div>

            </div>
          </div>
        </div>
      </div>


<style media="screen">
.x_title span {
  color: #000;
}
.fc button .fc-icon {
    color: #000;

}
.tile_count .tile_stats_count span{
  color:#333
}
</style>


    </div>
  </div>
</div>
<!-- /page content -->

@endsection

@push('footer')
<script type="text/javascript">
(function($) {
    $calendar = $('#invoice-calendar');
    $calendar.fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,listMonth'
        },
        selectable: true,
        selectHelper: true,
        select: function(start, end, allDay) {
            
        },
        eventClick: function(calEvent, jsEvent, view) {
            console.log(calEvent, jsEvent, view);
        },
        events: {
            url: "{{ route('invoice.calendar') }}",
            error: function() {
                $('#script-warning').show();
            }
        },
    });
})(jQuery);
</script>
@endpush