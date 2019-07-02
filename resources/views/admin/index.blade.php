<html class="no-outlines" lang="en" dir="ltr">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Quản trị website</title>
      <base href="{{ asset('admin') }}" >
      <meta name="author" content="">
      <meta name="description" content="">
      <meta name="keywords" content="">
      <link href="favicon.png" rel="icon" type="image/png">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CMontserrat:400,500" rel="stylesheet">
      <link href="{{assets('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/fontawesome-all.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/jquery-ui.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/perfect-scrollbar.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/morris.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/select2.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/jquery-jvectormap.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/horizontal-timeline.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/weather-icons.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/dropzone.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/ion.rangeSlider.skinFlat.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/datatables.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/fullcalendar.min.css')}}" rel="stylesheet">
      <link href="{{assets('public/admin/css/style.css')}}" rel="stylesheet">
      <style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style>
   </head>
   <body>
      <div class="wrapper">
         <header class="navbar navbar-fixed">
            <div class="navbar--header"> <a class="logo" href="index.html"> <img alt="" src="assets/img/logo.png"> </a> <a title="Toggle Sidebar" class="navbar--btn" href="#" data-toggle="sidebar"> <i class="fa fa-bars"></i> </a> </div>
            <a title="Toggle Sidebar" class="navbar--btn" href="#" data-toggle="sidebar"> <i class="fa fa-bars"></i> </a> 
            <div class="navbar--search">
               <form action="search-results.html"> <input name="search" class="form-control" required="" type="search" placeholder="Search Something..."> <button class="btn-link"><i class="fa fa-search"></i></button> </form>
            </div>
            <div class="navbar--nav ml-auto">
               <ul class="nav">
                  <li class="nav-item"> <a class="nav-link" href="#"> <i class="fa fa-bell"></i> <span class="badge text-white bg-blue">7</span> </a> </li>
                  <li class="nav-item"> <a class="nav-link" href="mailbox_inbox.html"> <i class="fa fa-envelope"></i> <span class="badge text-white bg-blue">4</span> </a> </li>
                  <li class="nav-item dropdown nav-language">
                     <a class="nav-link" href="#" data-toggle="dropdown"> <img alt="" src="assets/img/flags/us.png"> <span>English</span> <i class="fa fa-angle-down"></i> </a> 
                     <ul class="dropdown-menu">
                        <li> <a href=""> <img alt="" src="assets/img/flags/de.png"> <span>German</span> </a> </li>
                        <li> <a href=""> <img alt="" src="assets/img/flags/fr.png"> <span>French</span> </a> </li>
                        <li> <a href=""> <img alt="" src="assets/img/flags/us.png"> <span>English</span> </a> </li>
                     </ul>
                  </li>
                  <li class="nav-item dropdown nav--user online">
                     <a class="nav-link" href="#" data-toggle="dropdown"> <img class="rounded-circle" alt="" src="assets/img/avatars/01_80x80.png"> <span>Henry Foster</span> <i class="fa fa-angle-down"></i> </a> 
                     <ul class="dropdown-menu">
                        <li><a href="profile.html"><i class="far fa-user"></i>Profile</a></li>
                        <li><a href="mailbox_inbox.html"><i class="far fa-envelope"></i>Inbox</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i>Settings</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a href="lock-screen.html"><i class="fa fa-lock"></i>Lock Screen</a></li>
                        <li><a href="#"><i class="fa fa-power-off"></i>Logout</a></li>
                     </ul>
                  </li>
               </ul>
            </div>
         </header>
         <aside class="sidebar ps ps--active-y" data-trigger="scrollbar">
            <div class="sidebar--profile">
               <div class="profile--img"> <a href="profile.html"> <img class="rounded-circle" alt="" src="assets/img/avatars/01_80x80.png"> </a> </div>
               <div class="profile--name"> <a class="btn-link" href="profile.html">Henry Foster</a> </div>
               <div class="profile--nav">
                  <ul class="nav">
                     <li class="nav-item"> <a title="User Profile" class="nav-link" href="profile.html"> <i class="fa fa-user"></i> </a> </li>
                     <li class="nav-item"> <a title="Lock Screen" class="nav-link" href="lock-screen.html"> <i class="fa fa-lock"></i> </a> </li>
                     <li class="nav-item"> <a title="Messages" class="nav-link" href="mailbox_inbox.html"> <i class="fa fa-envelope"></i> </a> </li>
                     <li class="nav-item"> <a title="Logout" class="nav-link" href="#"> <i class="fa fa-sign-out-alt"></i> </a> </li>
                  </ul>
               </div>
            </div>
            <div class="sidebar--nav">
               <ul>
                  <li>
                     <ul>
                        <li class="active"> <a href="index.html"> <i class="fa fa-home"></i> <span>Dashboard</span> </a> </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-shopping-cart"></i> <span>Ecommerce</span> </a> 
                           <ul>
                              <li><a href="ecommerce.html">Dashboard</a></li>
                              <li><a href="products.html">Products</a></li>
                              <li><a href="products-edit.html">Edit Products</a></li>
                              <li><a href="orders.html">Orders</a></li>
                              <li><a href="order-view.html">Order View</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Layouts</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-th"></i> <span>Page Layouts</span> </a> 
                           <ul>
                              <li><a href="blank.html">Blank Page</a></li>
                              <li><a href="page-light.html">Page Light</a></li>
                              <li><a href="sidebar-light.html">Sidebar Light</a></li>
                           </ul>
                        </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-th-list"></i> <span>Footers</span> </a> 
                           <ul>
                              <li><a href="footer-light.html">Footer Light</a></li>
                              <li><a href="footer-dark.html">Footer Dark</a></li>
                              <li><a href="footer-transparent.html">Footer Transparent</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Components</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="far fa-newspaper"></i> <span>UI Elements</span> </a> 
                           <ul>
                              <li><a href="buttons.html">Buttons</a></li>
                              <li><a href="pagination.html">Pagination</a></li>
                              <li><a href="progress-bars.html">Progress Bars</a></li>
                              <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                              <li><a href="modals.html">Modals</a></li>
                              <li><a href="ui-slider.html">UI Slider</a></li>
                              <li><a href="sweet-alerts.html">Sweet Alerts</a></li>
                              <li><a href="timeline.html">Timeline</a></li>
                           </ul>
                        </li>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fab fa-wpforms"></i> <span>Form</span> </a> 
                           <ul>
                              <li><a href="form-elements.html">Form Elements</a></li>
                              <li><a href="form-wizard.html">Form Wizard</a></li>
                              <li><a href="dropzone.html">Dropzone</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Apps and Charts</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="far fa-envelope"></i> <span>Mailbox</span> </a> 
                           <ul>
                              <li><a href="mailbox_inbox.html">Inbox</a></li>
                              <li><a href="mailbox_compose.html">Compose</a></li>
                           </ul>
                        </li>
                        <li> <a href="calendar.html"> <i class="far fa-calendar-alt"></i> <span>Calendar</span> </a> </li>
                        <li> <a href="chat.html"> <i class="far fa-comments"></i> <span>Chat</span> </a> </li>
                        <li> <a href="contacts.html"> <i class="far fa-address-book"></i> <span>Contacts</span> </a> </li>
                        <li> <a href="notes.html"> <i class="far fa-sticky-note"></i> <span>Notes</span> </a> </li>
                        <li> <a href="todo-list.html"> <i class="fa fa-tasks"></i> <span>Todo List</span> </a> </li>
                        <li> <a href="search-results.html"> <i class="fa fa-search"></i> <span>Search Results</span> </a> </li>
                     </ul>
                  </li>
                  <li class="is-dropdown">
                     <a href="#">Extra</a> 
                     <ul>
                        <li class="is-dropdown">
                           <a href="#"> <i class="fa fa-file"></i> <span>Extra Pages</span> </a> 
                           <ul>
                              <li><a href="pricing-tables.html">Pricing Tables</a></li>
                              <li><a href="profile.html">Profile</a></li>
                              <li><a href="invoice.html">Invoice</a></li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="register.html">Register</a></li>
                              <li><a href="forgot-password.html">Forgot Password</a></li>
                              <li><a href="lock-screen.html">Lock Screen</a></li>
                              <li><a href="404.html">404 Error</a></li>
                              <li><a href="500.html">500 Error</a></li>
                              <li><a href="maintenance.html">Maintenance</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <div class="sidebar--widgets">
               <div class="widget">
                  <h3 class="h6 widget--title">Information Summary</h3>
                  <div class="summary--widget">
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#2bb3c0" data-height="38" data-width="5" data-type="bar">
                           <canvas width="107" height="38" style="width: 107px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">Daily Traffic</p>
                        <p class="summary--stats">307.512</p>
                     </div>
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#e16123" data-height="38" data-width="5" data-type="bar">
                           <canvas width="107" height="38" style="width: 107px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">Average Usage</p>
                        <p class="summary--stats">2,371,527</p>
                     </div>
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#cccccc" data-height="38" data-width="5" data-type="bar">
                           <canvas width="107" height="38" style="width: 107px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">Disk Usage</p>
                        <p class="summary--stats">37.5%</p>
                     </div>
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#009378" data-height="38" data-width="5" data-type="bar">
                           <canvas width="107" height="38" style="width: 107px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">CPU Usage</p>
                        <p class="summary--stats">37.05-32</p>
                     </div>
                     <div class="summary--item">
                        <p class="summary--chart" data-trigger="sparkline" data-color="#ff4040" data-height="38" data-width="5" data-type="bar">
                           <canvas width="107" height="38" style="width: 107px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                        </p>
                        <p class="summary--title">Memory Usage</p>
                        <p class="summary--stats">37.05%</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
               <div tabindex="0" class="ps__thumb-x" style="left: 0px; width: 0px;"></div>
            </div>
            <div class="ps__rail-y" style="top: 0px; height: 877px; right: 0px;">
               <div tabindex="0" class="ps__thumb-y" style="top: 0px; height: 455px;"></div>
            </div>
         </aside>
         <main class="main--container">
            <section class="page--header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-6">
                        <h2 class="page--title h5">Dashboard</h2>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item active"><span>Dashboard</span></li>
                        </ul>
                     </div>
                     <div class="col-lg-6">
                        <div class="summary--widget">
                           <div class="summary--item">
                              <p class="summary--chart" data-trigger="sparkline" data-color="#009378" data-height="38" data-width="5" data-type="bar">
                                 <canvas width="71" height="38" style="width: 71px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                              </p>
                              <p class="summary--title">This Month</p>
                              <p class="summary--stats text-green">2,371,527</p>
                           </div>
                           <div class="summary--item">
                              <p class="summary--chart" data-trigger="sparkline" data-color="#e16123" data-height="38" data-width="5" data-type="bar">
                                 <canvas width="71" height="38" style="width: 71px; height: 38px; vertical-align: top; display: inline-block;"></canvas>
                              </p>
                              <p class="summary--title">Last Month</p>
                              <p class="summary--stats text-orange">2,527,371</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="main--content">
               <div class="row gutter-20">
                  <div class="col-md-4">
                     <div class="panel">
                        <div class="miniStats--panel">
                           <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-color="#2bb3c0" data-height="30" data-width="4" data-type="bar">
                                 <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                              </p>
                              <p class="miniStats--label text-white bg-blue"> <i class="fa fa-level-up-alt"></i> <span>10%</span> </p>
                           </div>
                           <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-user text-blue"></i> 
                              <p class="miniStats--caption text-blue">Monthly</p>
                              <h3 class="miniStats--title h4">New Users</h3>
                              <p class="miniStats--num text-blue">13,450</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="panel">
                        <div class="miniStats--panel">
                           <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-color="#e16123" data-height="30" data-width="4" data-type="bar">
                                 <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                              </p>
                              <p class="miniStats--label text-white bg-orange"> <i class="fa fa-level-down-alt"></i> <span>10%</span> </p>
                           </div>
                           <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-ticket-alt text-orange"></i> 
                              <p class="miniStats--caption text-orange">Monthly</p>
                              <h3 class="miniStats--title h4">Tickets Answered</h3>
                              <p class="miniStats--num text-orange">450</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="panel">
                        <div class="miniStats--panel">
                           <div class="miniStats--header bg-darker">
                              <p class="miniStats--chart" data-trigger="sparkline" data-color="#009378" data-height="30" data-width="4" data-type="bar">
                                 <canvas width="109" height="30" style="width: 109px; height: 30px; vertical-align: top; display: inline-block;"></canvas>
                              </p>
                              <p class="miniStats--label text-white bg-green"> <i class="fa fa-level-up-alt"></i> <span>10%</span> </p>
                           </div>
                           <div class="miniStats--body">
                              <i class="miniStats--icon fa fa-rocket text-green"></i> 
                              <p class="miniStats--caption text-green">Monthly</p>
                              <h3 class="miniStats--title h4">Projects Launched</h3>
                              <p class="miniStats--num text-green">3,130,300</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-8 col-md-6">
                     <div class="panel">
                        <div class="panel-heading">
                           <h3 class="panel-title">Yearly Earning Graph Overview</h3>
                           <div class="dropdown">
                              <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                              <ul class="dropdown-menu">
                                 <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                 <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                 <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="panel-chart">
                           <div class="chart--body area--chart style--1" id="morrisAreaChart01" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                              <svg xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;" width="1202.17" height="235" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                 <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                 <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="49.18" y="196.6">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$0</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 61.68 196.6 H 1177.17" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="49.18" y="153.7">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$1,250</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 61.68 153.7 H 1177.17" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="49.18" y="110.8">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$2,500</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 61.68 110.8 H 1177.17" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="49.18" y="67.9">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$3,750</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 61.68 67.9 H 1177.17" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="49.18" y="25">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$5,000</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 61.68 25 H 1177.17" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="1177.17" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Dec</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="1075.7618" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Nov</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="974.3536" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Oct</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="872.9454" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Sep</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="771.5373" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Aug</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="670.1291" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Jul</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="568.7209" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Jun</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="467.3127" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">May</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="365.9046" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Apr</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="264.4964" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Mar</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="163.0882" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Feb</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="61.68" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">Jan</tspan>
                                 </text>
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e08458" fill-opacity="0.8" stroke="none" d="M 61.68 196.6 C 87.032 179.44 137.736 136.54 163.088 127.96 C 188.44 119.38 239.144 127.96 264.496 127.96 C 289.848 127.96 340.552 127.96 365.905 127.96 C 391.257 127.96 441.961 125.815 467.313 127.96 C 492.665 130.105 543.369 137.827 568.721 145.12 C 594.073 152.413 644.777 190.594 670.129 186.304 C 695.481 182.014 746.185 113.803 771.537 110.8 C 796.889 107.797 847.593 166.57 872.945 162.28 C 898.297 157.99 949.002 87.205 974.354 76.48 C 999.706 65.755 1050.41 82.915 1075.76 76.48 C 1101.11 70.045 1151.82 37.87 1177.17 25 L 1177.17 196.6 L 61.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#e16123" stroke-width="0" d="M 61.68 196.6 C 87.032 179.44 137.736 136.54 163.088 127.96 C 188.44 119.38 239.144 127.96 264.496 127.96 C 289.848 127.96 340.552 127.96 365.905 127.96 C 391.257 127.96 441.961 125.815 467.313 127.96 C 492.665 130.105 543.369 137.827 568.721 145.12 C 594.073 152.413 644.777 190.594 670.129 186.304 C 695.481 182.014 746.185 113.803 771.537 110.8 C 796.889 107.797 847.593 166.57 872.945 162.28 C 898.297 157.99 949.002 87.205 974.354 76.48 C 999.706 65.755 1050.41 82.915 1075.76 76.48 C 1101.11 70.045 1151.82 37.87 1177.17 25" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="61.68" cy="196.6" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="163.088" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="264.496" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="365.905" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="467.313" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="568.721" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="670.129" cy="186.304" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="771.537" cy="110.8" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="872.945" cy="162.28" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="974.354" cy="76.48" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="1075.76" cy="76.48" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#e16123" stroke="#ffffff" stroke-width="1" cx="1177.17" cy="25" r="0" />
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#f98686" fill-opacity="0.8" stroke="none" d="M 61.68 196.6 C 87.032 183.73 137.736 153.7 163.088 145.12 C 188.44 136.54 239.144 130.105 264.496 127.96 C 289.848 125.815 340.552 127.96 365.905 127.96 C 391.257 127.96 441.961 124.528 467.313 127.96 C 492.665 131.392 543.369 155.416 568.721 155.416 C 594.073 155.416 644.777 135.682 670.129 127.96 C 695.481 120.238 746.185 89.35 771.537 93.64 C 796.889 97.93 847.593 157.132 872.945 162.28 C 898.297 167.428 949.002 139.114 974.354 134.824 C 999.706 130.534 1050.41 125.386 1075.76 127.96 C 1101.11 130.534 1151.82 148.552 1177.17 155.416 L 1177.17 196.6 L 61.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#ff4040" stroke-width="0" d="M 61.68 196.6 C 87.032 183.73 137.736 153.7 163.088 145.12 C 188.44 136.54 239.144 130.105 264.496 127.96 C 289.848 125.815 340.552 127.96 365.905 127.96 C 391.257 127.96 441.961 124.528 467.313 127.96 C 492.665 131.392 543.369 155.416 568.721 155.416 C 594.073 155.416 644.777 135.682 670.129 127.96 C 695.481 120.238 746.185 89.35 771.537 93.64 C 796.889 97.93 847.593 157.132 872.945 162.28 C 898.297 167.428 949.002 139.114 974.354 134.824 C 999.706 130.534 1050.41 125.386 1075.76 127.96 C 1101.11 130.534 1151.82 148.552 1177.17 155.416" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="61.68" cy="196.6" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="163.088" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="264.496" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="365.905" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="467.313" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="568.721" cy="155.416" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="670.129" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="771.537" cy="93.64" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="872.945" cy="162.28" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="974.354" cy="134.824" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="1075.76" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="1177.17" cy="155.416" r="0" />
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#4cc3ce" fill-opacity="0.8" stroke="none" d="M 61.68 179.44 C 87.032 179.44 137.736 183.73 163.088 179.44 C 188.44 175.15 239.144 149.41 264.496 145.12 C 289.848 140.83 340.552 145.12 365.905 145.12 C 391.257 145.12 441.961 147.265 467.313 145.12 C 492.665 142.975 543.369 132.25 568.721 127.96 C 594.073 123.67 644.777 108.655 670.129 110.8 C 695.481 112.945 746.185 140.83 771.537 145.12 C 796.889 149.41 847.593 151.555 872.945 145.12 C 898.297 138.685 949.002 95.785 974.354 93.64 C 999.706 91.495 1050.41 134.395 1075.76 127.96 C 1101.11 121.525 1151.82 63.61 1177.17 42.16 L 1177.17 196.6 L 61.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#2bb3c0" stroke-width="0" d="M 61.68 179.44 C 87.032 179.44 137.736 183.73 163.088 179.44 C 188.44 175.15 239.144 149.41 264.496 145.12 C 289.848 140.83 340.552 145.12 365.905 145.12 C 391.257 145.12 441.961 147.265 467.313 145.12 C 492.665 142.975 543.369 132.25 568.721 127.96 C 594.073 123.67 644.777 108.655 670.129 110.8 C 695.481 112.945 746.185 140.83 771.537 145.12 C 796.889 149.41 847.593 151.555 872.945 145.12 C 898.297 138.685 949.002 95.785 974.354 93.64 C 999.706 91.495 1050.41 134.395 1075.76 127.96 C 1101.11 121.525 1151.82 63.61 1177.17 42.16" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="61.68" cy="179.44" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="163.088" cy="179.44" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="264.496" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="365.905" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="467.313" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="568.721" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="670.129" cy="110.8" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="771.537" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="872.945" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="974.354" cy="93.64" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="1075.76" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="1177.17" cy="42.16" r="0" />
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#09a88a" fill-opacity="0.8" stroke="none" d="M 61.68 196.6 C 87.032 188.02 137.736 168.715 163.088 162.28 C 188.44 155.845 239.144 147.265 264.496 145.12 C 289.848 142.975 340.552 145.12 365.905 145.12 C 391.257 145.12 441.961 147.265 467.313 145.12 C 492.665 142.975 543.369 126.673 568.721 127.96 C 594.073 129.247 644.777 155.416 670.129 155.416 C 695.481 155.416 746.185 127.102 771.537 127.96 C 796.889 128.818 847.593 160.135 872.945 162.28 C 898.297 164.425 949.002 155.845 974.354 145.12 C 999.706 134.395 1050.41 89.35 1075.76 76.48 C 1101.11 63.61 1151.82 50.74 1177.17 42.16 L 1177.17 196.6 L 61.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#009378" stroke-width="0" d="M 61.68 196.6 C 87.032 188.02 137.736 168.715 163.088 162.28 C 188.44 155.845 239.144 147.265 264.496 145.12 C 289.848 142.975 340.552 145.12 365.905 145.12 C 391.257 145.12 441.961 147.265 467.313 145.12 C 492.665 142.975 543.369 126.673 568.721 127.96 C 594.073 129.247 644.777 155.416 670.129 155.416 C 695.481 155.416 746.185 127.102 771.537 127.96 C 796.889 128.818 847.593 160.135 872.945 162.28 C 898.297 164.425 949.002 155.845 974.354 145.12 C 999.706 134.395 1050.41 89.35 1075.76 76.48 C 1101.11 63.61 1151.82 50.74 1177.17 42.16" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="61.68" cy="196.6" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="163.088" cy="162.28" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="264.496" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="365.905" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="467.313" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="568.721" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="670.129" cy="155.416" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="771.537" cy="127.96" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="872.945" cy="162.28" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="974.354" cy="145.12" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="1075.76" cy="76.48" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#009378" stroke="#ffffff" stroke-width="1" cx="1177.17" cy="42.16" r="0" />
                              </svg>
                              <div class="morris-hover morris-default-style" style="left: 400.3px; top: 51px; display: none;">
                                 <div class="morris-hover-row-label">May</div>
                                 <div class="morris-hover-point" style="color: #e16123">
                                    Order:
                                    $2,000
                                 </div>
                                 <div class="morris-hover-point" style="color: #ff4040">
                                    Shipment:
                                    $2,000
                                 </div>
                                 <div class="morris-hover-point" style="color: #2bb3c0">
                                    Tax:
                                    $1,500
                                 </div>
                                 <div class="morris-hover-point" style="color: #009378">
                                    Revenue:
                                    $1,500
                                 </div>
                              </div>
                           </div>
                           <div class="chart--stats style--1">
                              <ul class="nav">
                                 <li data-overlay="1 orange">
                                    <p class="amount">$10,320,340</p>
                                    <p> <span class="label">Order</span> <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span> </p>
                                 </li>
                                 <li data-overlay="1 red">
                                    <p class="amount">$235,090</p>
                                    <p> <span class="label">Shipment</span> <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span> </p>
                                 </li>
                                 <li data-overlay="1 blue">
                                    <p class="amount">$134,900</p>
                                    <p> <span class="label">Tax</span> <span class="text-red"><i class="fa fa-long-arrow-alt-down"></i>2.25%</span> </p>
                                 </li>
                                 <li data-overlay="1 green">
                                    <p class="amount">$1,340</p>
                                    <p> <span class="label">Revenue</span> <span class="text-green"><i class="fa fa-long-arrow-alt-up"></i>2.25%</span> </p>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-4 col-md-6">
                     <div class="panel">
                        <div class="panel-heading">
                           <h3 class="panel-title">Market Trends</h3>
                           <div class="dropdown">
                              <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                              <ul class="dropdown-menu">
                                 <li><a href="#">This Week</a></li>
                                 <li><a href="#">Last Week</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="panel-chart">
                           <div class="chart--body area--chart style--1" id="morrisAreaChart02" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                              <svg xmlns="http://www.w3.org/2000/svg" style="left: -0.59px; overflow: hidden; position: relative;" width="588.08" height="235" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
                                 <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc>
                                 <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="39.18" y="196.6">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$0</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 51.68 196.6 H 563.08" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="39.18" y="153.7">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$225</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 51.68 153.7 H 563.08" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="39.18" y="110.8">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$450</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 51.68 110.8 H 563.08" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="39.18" y="67.9">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$675</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 51.68 67.9 H 563.08" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: end; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="end" x="39.18" y="25">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">$900</tspan>
                                 </text>
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#eeeeee" stroke-width="0.5" d="M 51.68 25 H 563.08" />
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="563.08" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">26</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="477.8467" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">25</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="392.6134" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">24</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="307.38" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">23</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="222.1467" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">22</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="136.9133" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">21</tspan>
                                 </text>
                                 <text font-family="sans-serif" font-size="12px" font-weight="normal" style="font-family: sans-serif; font-size: 12px; font-weight: normal; text-anchor: middle; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#888888" stroke="none" text-anchor="middle" transform="matrix(1, 0, 0, 1, 0, 6.7)" x="51.68" y="209.1">
                                    <tspan style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" dy="4.16">20</tspan>
                                 </text>
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#f98686" fill-opacity="0.8" stroke="none" d="M 51.68 196.6 C 72.9883 187.067 115.605 167.523 136.913 158.467 C 158.222 149.41 200.838 128.913 222.147 124.147 C 243.455 119.38 286.072 130.105 307.38 120.333 C 328.688 110.562 371.305 50.74 392.613 45.9733 C 413.922 41.2067 456.538 82.4383 477.847 82.2 C 499.155 81.9617 541.772 53.6 563.08 44.0667 L 563.08 196.6 L 51.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#ff4040" stroke-width="0" d="M 51.68 196.6 C 72.9883 187.067 115.605 167.523 136.913 158.467 C 158.222 149.41 200.838 128.913 222.147 124.147 C 243.455 119.38 286.072 130.105 307.38 120.333 C 328.688 110.562 371.305 50.74 392.613 45.9733 C 413.922 41.2067 456.538 82.4383 477.847 82.2 C 499.155 81.9617 541.772 53.6 563.08 44.0667" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="51.68" cy="196.6" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="136.913" cy="158.467" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="222.147" cy="124.147" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="307.38" cy="120.333" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="392.613" cy="45.9733" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="477.847" cy="82.2" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#ff4040" stroke="#ffffff" stroke-width="1" cx="563.08" cy="44.0667" r="0" />
                                 <path style="fill-opacity: 0.8; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#4cc3ce" fill-opacity="0.8" stroke="none" d="M 51.68 187.067 C 72.9883 177.533 115.605 153.7 136.913 148.933 C 158.222 144.167 200.838 153.7 222.147 148.933 C 243.455 144.167 286.072 113.183 307.38 110.8 C 328.688 108.417 371.305 134.633 392.613 129.867 C 413.922 125.1 456.538 84.5833 477.847 72.6667 C 499.155 60.75 541.772 44.0667 563.08 34.5333 L 563.08 196.6 L 51.68 196.6 Z" />
                                 <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#2bb3c0" stroke-width="0" d="M 51.68 187.067 C 72.9883 177.533 115.605 153.7 136.913 148.933 C 158.222 144.167 200.838 153.7 222.147 148.933 C 243.455 144.167 286.072 113.183 307.38 110.8 C 328.688 108.417 371.305 134.633 392.613 129.867 C 413.922 125.1 456.538 84.5833 477.847 72.6667 C 499.155 60.75 541.772 44.0667 563.08 34.5333" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="51.68" cy="187.067" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="136.913" cy="148.933" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="222.147" cy="148.933" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="307.38" cy="110.8" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="392.613" cy="129.867" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="477.847" cy="72.6667" r="0" />
                                 <circle style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="#2bb3c0" stroke="#ffffff" stroke-width="1" cx="563.08" cy="34.5333" r="0" />
                              </svg>
                              <div class="morris-hover morris-default-style" style="left: 0px; top: 91px; display: none;">
                                 <div class="morris-hover-row-label">20</div>
                                 <div class="morris-hover-point" style="color: #ff4040">
                                    Total Debt:
                                    $0
                                 </div>
                                 <div class="morris-hover-point" style="color: #2bb3c0">
                                    Total Equity:
                                    $50
                                 </div>
                              </div>
                           </div>
                           <div class="chart--stats style--2">
                              <ul class="nav">
                                 <li>
                                    <p class="amount">$56,700</p>
                                    <p data-overlay="1 blue"><span class="label">TOTAL EQUITY</span></p>
                                 </li>
                                 <li>
                                    <p class="amount">$4,000</p>
                                    <p data-overlay="1 red"><span class="label">TOTAL DEBT</span></p>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="panel">
                        <div class="panel-heading">
                           <h3 class="panel-title">Overall Rating</h3>
                           <div class="dropdown">
                              <button class="btn-link dropdown-toggle" type="button" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i> </button> 
                              <ul class="dropdown-menu">
                                 <li><a href="#"><i class="fa fa-sync"></i>Update Data</a></li>
                                 <li><a href="#"><i class="fa fa-cogs"></i>Settings</a></li>
                                 <li><a href="#"><i class="fa fa-times"></i>Remove Panel</a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="panel-chart">
                           <div class="chart--body line--chart style--4" data-trigger="sparklineChart01">
                              <canvas width="158" height="100" style="width: 158.5px; height: 100px; vertical-align: top; display: inline-block;"></canvas>
                           </div>
                           <div class="chart--stats style--4">
                              <ul class="nav">
                                 <li> <span class="text">The product is awesome</span> <span class="stat">20%</span> </li>
                                 <li> <span class="text">I am so pleased</span> <span class="stat">40%</span> </li>
                                 <li> <span class="text">The product is really good</span> <span class="stat">20%</span> </li>
                                 <li> <span class="text">The product is awesome</span> <span class="stat">60%</span> </li>
                                 <li> <span class="text">I am so surprised</span> <span class="stat">20%</span> </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-3 col-md-6">
                     <div class="panel">
                        <div class="weather--panel text-white bg-blue">
                           <div class="weather--title"> <i class="fa fa-map-marker-alt"></i> <span>Dhaka, Bangladesh</span> </div>
                           <div class="weather--info"> <i class="wi wi-rain-wind"></i> <span>33°C</span> </div>
                        </div>
                     </div>
                     <div class="panel">
                        <div class="weather--panel text-white bg-orange">
                           <div class="weather--title"> <i class="fa fa-map-marker-alt"></i> <span>Melbourne, Autoria</span> </div>
                           <div class="weather--info"> <i class="wi wi-hot"></i> <span>35°C</span> </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-6">
                     <div class="panel">
                        <div class="profile--panel">
                           <div class="img-wrapper bg--img" style='background-image: url("assets/img/covers/01_800x150.jpg");'>
                              <div class="img online"> <img class="rounded-circle" alt="" src="assets/img/avatars/01_150x150.png"> </div>
                           </div>
                           <div class="name">
                              <h3 class="h3">Henry Foster</h3>
                           </div>
                           <div class="role">
                              <p>Web Developer &amp; Graphic Designer</p>
                           </div>
                           <div class="action"> <a class="btn btn-info" href="#">+ Follow</a> </div>
                           <div class="bio">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo ratione vitae aliquid aliquam provident nostrum itaque quam minima molestias.</p>
                           </div>
                           <ul class="info nav text-uppercase">
                              <li> <strong>1125</strong> <span>Items</span> </li>
                              <li> <strong>133</strong> <span>Projects</span> </li>
                              <li> <strong>3025</strong> <span>Followers</span> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <footer class="main--footer main--footer-light">
               <p>Copyright © <a href="#">DAdmin</a>. All Rights Reserved.</p>
            </footer>
         </main>
      </div>
      <script src="{{assets('public/js/jquery.min.js')}}"></script>
      <script src="{{assets('public/js/jquery-ui.min.js')}}"></script>
      <script src="{{assets('public/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{assets('public/js/perfect-scrollbar.min.js')}}"></script>
      <script src="{{assets('public/js/jquery.sparkline.min.js')}}"></script>
      <script src="{{assets('public/js/raphael.min.js')}}"></script>
      <script src="{{assets('public/js/morris.min.js')}}"></script>
      <script src="{{assets('public/js/select2.min.js')}}"></script>
      <script src="{{assets('public/js/jquery-jvectormap.min.js')}}"></script>
      <script src="{{assets('public/js/jquery-jvectormap-world-mill.min.js')}}"></script>
      <script src="{{assets('public/js/horizontal-timeline.min.js')}}"></script>
      <script src="{{assets('public/js/jquery.validate.min.js')}}"></script>
      <script src="{{assets('public/js/jquery.steps.min.js')}}"></script>
      <script src="{{assets('public/js/dropzone.min.js')}}"></script>
      <script src="{{assets('public/js/ion.rangeSlider.min.js')}}"></script>
      <script src="{{assets('public/js/datatables.min.js')}}"></script>
      <script src="{{assets('public/js/main.js')}}"></script>
      <div class="jvectormap-tip" style="left: 1454px; top: 931px; display: none;">United States</div>
   </body>
</html>