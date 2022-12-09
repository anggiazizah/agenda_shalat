<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <!-- loader-->
  <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet"/>
  <script src="{{ asset('assets/js/pace.min.js') }}"></script>
  <!--favicon-->
  <link rel="icon" href="{{ asset('assets/images/LOGO-SMK.png') }}" type="image/x-icon">
  <!--Full Calendar Css-->
  <link href="{{ asset('assets/plugins/fullcalendar/css/fullcalendar.min.css') }}" rel='stylesheet'/>
  <!-- simplebar CSS-->
  <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="{{ asset('assets/css/sidebar-menu.css') }}" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="{{ asset('assets/css/app-style.css') }}" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">
 
   <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
       <img src="{{ asset('/assets/images/LOGO-SMK.png') }}" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">AGENDA SHALAT</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
    {{-- @if (Auth::user()->role == 'admin') --}}
        
   <li>
        <a href="{{route('admin.dashboardAdmin')}}">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="{{route('admin.agendaAdmin')}}">
          <i class="zmdi zmdi-book"></i> <span>Agenda</span>
        </a>
      </li>

      <li>
        <a href="{{route('admin.kalenderAdmin')}}">
          <i class="zmdi zmdi-calendar"></i><span>Kalender</span>
          <small class="badge float-right badge-light"></small>
        </a>
      </li>

      <li>
        <a href="{{route('pengguna.index')}}">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>
      
    </ul>

   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
        <li class="dropdown-item user-details">
         <a href="javaScript:void();">
            <div class="media">
              <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
             <div class="media-body">
             <a href="#" class="mt-2 user-title"><h6> {{ auth()->user()->nama }}</h6></a>
             <p class="user-subtitle">{{ auth()->user()->email }}</p>
             </div>
            </div>
           </a>
         </li>
         <li class="dropdown-divider"></li>
         <a href="{{route('admin.logout')}}"><li class="dropdown-item"><i class="icon-power mr-2"></i> Keluar</li></a>
       </ul>
     </li>
   </ul>
 </nav>
 </header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      @include('komponen.pesan')

        @yield('konten')
        {{-- @else
        @endif --}}

        <!--start overlay-->
		  <div class="overlay toggle-menu"></div>
          <!--end overlay-->
          
      </div>
      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      
      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center">
          </div>
        </div>
      </footer>
      <!--End footer-->
     
    </div><!--End wrapper-->
  
    <!-- Bootstrap core JavaScript-->
  
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	
  <!-- simplebar js -->
  <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
  <!-- sidebar-menu js -->
  <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
  
  <!-- Custom scripts -->
  <script src="{{ asset('assets/js/app-script.js') }}"></script>
  
  <!-- Full Calendar -->
  <script src="{{ asset('assets/plugins/fullcalendar/js/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
  
  
  <script>
    $(document).ready(function() {



$('#calendar').fullCalendar({

  header: {

    left: 'prev,next today',

    center: 'title',

    right: 'month,agendaWeek,agendaDay'

  },


  navLinks: true, // can click day/week names to navigate views

  selectable: true,

  selectHelper: true,

  select: function(start, end) {

   let tanggal = moment(start).format('YYYY-MM-DD');
   window.location.href='/admin/AdminAgenda?tanggal='+tanggal;

  },

  editable: true,

  eventLimit: true, // allow "more" link when too many events

  events: [

    {

      title: 'All Day Event',

      start: '2018-03-01'

    },

    {

      title: 'Long Event',

      start: '2018-03-07',

      end: '2018-03-10'

    },

    {

      id: 999,

      title: 'Repeating Event',

      start: '2018-03-09T16:00:00'

    },

    {

      id: 999,

      title: 'Repeating Event',

      start: '2018-03-16T16:00:00'

    },

    {

      title: 'Conference',

      start: '2018-03-11',

      end: '2018-03-13'

    },

    {

      title: 'Meeting',

      start: '2018-03-12T10:30:00',

      end: '2018-03-12T12:30:00'

    },

    {

      title: 'Lunch',

      start: '2018-03-12T12:00:00'

    },

    {

      title: 'Meeting',

      start: '2018-03-12T14:30:00'

    },

    {

      title: 'Happy Hour',

      start: '2018-03-12T17:30:00'

    },

    {

      title: 'Dinner',

      start: '2018-03-12T20:00:00'

    },

    {

      title: 'Birthday Party',

      start: '2018-03-13T07:00:00'

    },

    {

      title: 'Click for Google',

      url: 'http://google.com/',

      start: '2018-03-28'

    }

  ]

});



});
  </script>
</body>
</html>

  

  