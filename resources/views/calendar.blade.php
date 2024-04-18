<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!--Full Calendar Css-->
  <link href="assets/plugins/fullcalendar/css/fullcalendar.min.css" rel='stylesheet'/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme2">

   <!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->
<!-- Start wrapper-->
<div id="wrapper">
 
 <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
      <h1 class="logo-text">MENU !!!</h1>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
     <li class="sidebar-header">MAIN NAVIGATION</li>
     <li>
       <a href="{{ route('dashboard') }}">
         <i class="zmdi zmdi-archive"></i> <span>Dashboard</span>
       </a>
     </li>
     
     <li>
       <a href="{{ route('users.index') }}">
         <i class="zmdi zmdi-view-dashboard"></i> <span>Users Data</span>
       </a>
     </li>

     <li>
       <a href="{{ route('product.index') }}">
         <i class="zmdi zmdi-invert-colors"></i> <span>Products Data</span>
       </a>
     </li>

     <li>
       <a href="index.html">
         <i class="zmdi zmdi-format-list-bulleted"></i> <span>Purchase</span>
       </a>
     </li>

     <li>
       <a href="index.html">
         <i class="zmdi zmdi-grid"></i> <span>Sales Transaction</span>
       </a>
     </li>

     <li>
       <a href="{{ route('calendar') }}">
         <i class="zmdi zmdi-account-calendar"></i> <span>Calendar</span>
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
   <li class="nav-item">
   <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">Bayu MI22A</h5>
   </li>
 </ul>

 <ul class="navbar-nav align-items-center right-nav-link">
   <li class="nav-item dropdown-lg">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <i class="fa fa-envelope-open-o"></i></a>
   </li>
   <li class="nav-item dropdown-lg">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
     <i class="fa fa-bell-o"></i></a>
   </li>
   <li class="nav-item language">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
     <ul class="dropdown-menu dropdown-menu-right">
         <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
         <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
       </ul>
   </li>
   <li class="nav-item">
     <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
       <span class="user-profile"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFNeUn89NkscCQdePBFlIp7ixL81eU9pY3g&s" class="img-circle" alt="user avatar"></span>
     </a>
     <ul class="dropdown-menu dropdown-menu-right">
      <li class="dropdown-item user-details">
       <a href="javaScript:void();">
          <div class="media">
            <div class="avatar"><img class="align-self-start mr-3" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPFNeUn89NkscCQdePBFlIp7ixL81eU9pY3g&s" alt="user avatar"></div>
           <div class="media-body">
           <h6 class="mt-2 user-title">{{ auth()->user()->name }}</h6>
           <p class="user-subtitle">{{ auth()->user()->email }}</p>
           </div>
          </div>
         </a>
       </li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
       <li class="dropdown-divider"></li>
       <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
       <li class="dropdown-divider"></li>
       <a href="{{ route('logout') }}">
       <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
</a>
     </ul>
   </li>
 </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
    
    <div class="mt-3">
      <div id='calendar'></div>
    </div>
			
		<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->	
			
    </div>
    <!-- End container-fluid-->
   </div><!--End content-wrapper-->
   
  <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  <!--End Back To Top Button-->



	<!--start color switcher-->
  <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="themeL"></li>
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		<li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
  <!-- Full Calendar -->
  <script src='assets/plugins/fullcalendar/js/moment.min.js'></script>
  <script src='assets/plugins/fullcalendar/js/fullcalendar.min.js'></script>
  <script src="assets/plugins/fullcalendar/js/fullcalendar-custom-script.js"></script>
	
</body>
</html>