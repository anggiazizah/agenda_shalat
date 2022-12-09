<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Agenda Shalat - Agenda shalat</title>
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

   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>

 <div id="wrapper">
 
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="{{ route('beranda') }}">
        <img src="{{ asset('/assets/images/LOGO-SMK.png') }}" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Agenda Shalat</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">

      <li>
        <a href="{{route('beranda')}}">
          <i class="zmdi zmdi-home"></i> <span>Beranda</span>
        </a>
      </li>

      <li>
        <a href="{{ route('agenda') }}">
          <i class="zmdi zmdi-book"></i> <span>Agenda</span>
        </a>
      </li>

      <li>
        <a href="{{route('kalender')}}">
          <i class="zmdi zmdi-calendar"></i> <span>Kalender</span>
        </a>
      </li>

      <li>
        <a href="{{route('profile')}}">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

	     </ul>
   
   </div>

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
    <!-- <a class="nav-link count-indicator " href="#" data-toggle="dropdown">
                  <i class="zmdi zmdi-notifications"></i>
                  <span class="count bg-danger"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                  <h6 class="p-3 mb-0">Notifikasi</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-calendar text-success"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Dzikir Sore</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Dzikir Sore</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-settings text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Shalat Ashar</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Shalat Ashar</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-link-variant text-warning"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Shalat Dzuhur</p>
                      <p class="text-muted ellipsis mb-0">Anda telah melakukan Shalat Dzuhur</p>
                    </div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <p class="p-3 mb-0 text-center">Lihat semua notifikasi</p>
                </div> -->

    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="" href="https://wa.me/+6285716749732/?text=Assalamualaikum saya mau bertanya">
      <i class="zmdi zmdi-whatsapp"></i></a>
    </li>
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
              <p class="user-subtitle">{{ auth()->user()->nis }}</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="{{route('logout')}}"><li class="dropdown-item"><i class="icon-power mr-2"></i> Keluar</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

        @yield('konten')

        <div class="overlay toggle-menu"></div>
			
      </div>
     </div>
     
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  
  
    
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    
    <script src="{{ asset('assets/js/app-script.js') }}"></script>
    
    <script src="{{ asset('assets/plugins/fullcalendar/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/js/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('assets/js/moment.js') }}"></script>
  
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
     window.location.href='/agenda?tanggal='+tanggal;
  
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
  