@extends('layouts.app')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">

    <title>CRMi - Dashboard</title>
    
  <!-- Vendors Style-->
  <link rel="stylesheet" href="assets/css/vendors_css.css">
    
  <!-- Style-->  
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/skin_color.css">
     
  </head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
  
<div class="wrapper">
  <div id="loader"></div>
  
  <header class="main-header">
  <div class="d-flex align-items-center logo-box justify-content-start d-md-none d-block">  
    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- logo-->
      <div class="logo-mini w-30">
        <span class="light-logo"><img src="assets/images/logo-letter.png" alt="logo"></span>
        <span class="dark-logo"><img src="assets/images/logo-letter-white.png" alt="logo"></span>
      </div>
      <div class="logo-lg">
        <span class="light-logo"><img src="assets/images/logo-dark-text.png" alt="logo"></span>
        <span class="dark-logo"><img src="assets/images/logo-light-text.png" alt="logo"></span>
      </div>
    </a>  
  </div>   
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
    <div class="app-menu">
    <ul class="header-megamenu nav">
      <li class="btn-group nav-item">
        <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
          <i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      <li class="btn-group d-lg-inline-flex d-none">
        <div class="app-menu">
          <div class="search-bx mx-5">
            <form>
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Search">
                <div class="input-group-append">
                <button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </li>
    </ul> 
    </div>
    
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">
      <li class="dropdown notifications-menu btn-group nav-item">
        <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" data-bs-toggle="dropdown" title="Notifications">
          <i class="icon-Notifications"><span class="path1"></span><span class="path2"></span></i>
          <div class="pulse-wave"></div>
          </a>
        <ul class="dropdown-menu animated bounceIn">
          <li class="header">
          <div class="p-20">
            <div class="flexbox">
              <div>
                <h4 class="mb-0 mt-0">Notifications</h4>
              </div>
              <div>
                <a href="#" class="text-danger">Clear All</a>
              </div>
            </div>
          </div>
          </li>
          <li>
          <!-- inner menu: contains the actual data -->
          <ul class="menu sm-scrol">
            <li>
            <a href="#">
              <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
            </a>
            </li>
            <li>
            <a href="#">
              <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
            </a>
            </li>
          </ul>
          </li>
          <li class="footer">
            <a href="#">View all</a>
          </li>
        </ul>
      </li>
      <li class="btn-group nav-item">
        <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_actions_toggle">
          <i class="icon-Layout-arrange"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      <li class="btn-group nav-item d-xl-inline-flex d-none">
        <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_panel_toggle">
          <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      <li class="btn-group nav-item d-xl-inline-flex d-none">
        <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" data-bs-toggle="modal" data-bs-target="#quick_shop_toggle">
          <i class="icon-Cart1"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      <li class="btn-group nav-item d-xl-inline-flex d-none">
        <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="" id="live-chat">
          <i class="icon-Chat"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      
      <li class="btn-group d-xl-inline-flex d-none">
          <a href="#" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon dropdown-toggle" data-bs-toggle="dropdown">
          <img class="rounded" src="assets/images/svg-icon/usa.svg" alt="">
        </a>
          <div class="dropdown-menu">
          <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/usa.svg" alt=""> English</a>
          <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/spain.svg" alt=""> Spanish</a>
          <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/ger.svg" alt=""> German</a>
          <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/jap.svg" alt=""> Japanese</a>
          <a class="dropdown-item my-5" href="#"><img class="w-20 rounded me-10" src="assets/images/svg-icon/fra.svg" alt=""> French</a>
          </div>
      </li>
      
      <li class="btn-group nav-item d-xl-inline-flex d-none">
        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link btn-primary-light svg-bt-icon" title="Full Screen">
          <i class="icon-Expand-arrows"><span class="path1"></span><span class="path2"></span></i>
          </a>
      </li>
      
      <li class="btn-group nav-item">
        <a href="#" class="waves-effect waves-light nav-link bg-primary btn-primary w-auto fs-14" title="Full Screen">
          Generate Report
          </a>
      </li>
      
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
    {{-- <div class="d-flex align-items-center logo-box justify-content-start d-md-block d-none">  
      <a href="index.html" class="logo">
        <div class="logo-mini">
          <span class="light-logo"><img src="assets/images/logo-letter.png" alt="logo"></span>
        </div>
        <div class="logo-lg">
          <span class="light-logo fs-36 fw-700">CRM<span class="text-primary">i</span></span>
        </div>
      </a>  
    </div>  --}}
    <div class="user-profile my-15 px-20 py-10 b-1 rounded10 mx-15">
      <div class="d-flex align-items-center justify-content-between">      
        <div class="image d-flex align-items-center">
            {{-- <img src="" class="rounded-0 me-10" alt="User Image"> --}}
          <div>
            <h4 class="mb-0 fw-600">Jassa</h4>
            <p class="mb-0">Super Admin</p>
          </div>
        </div>
        <div class="info">
          <a class="dropdown-toggle p-15 d-grid" data-bs-toggle="dropdown" href="#"></a>
          <div class="dropdown-menu dropdown-menu-end">
            <a class="dropdown-item" href="#"><i class="ti-user"></i> Profile</a>
            <a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
            <a class="dropdown-item" href="#"><i class="ti-link"></i> Conversation</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#"><i class="ti-lock"></i> Logout</a>
          </div>
        </div>
      </div>
      </div>
      <div class="multinav">
      <div class="multinav-scroll" style="height: 97%;">  
        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">  
        <li class="header">Main Menu</li>
        <li>
          <a href="index.html">
          <i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
          <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="icon-Chart-pie"><span class="path1"></span><span class="path2"></span></i>
          <span>Reports</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="icon-Wallet"><span class="path1"></span><span class="path2"></span></i>
          <span>Expenses</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
          <span>Support</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="icon-Chat2"></i>
          <span>Chat</span>
          </a>
        </li>
        <li>
          <a href="#">
          <i class="icon-Add-user"><span class="path1"></span><span class="path2"></span></i>
          <span>Contacts</span>
          </a>
        </li>          
        <li class="header">Components</li>
        <li class="treeview">
          <a href="#">
          <i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
          <span>Features</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-right pull-right"></i>
          </span>
          </a>
          <ul class="treeview-menu">                      
          <li class="treeview">
            <a href="#">
              <i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
              <span class="pull-right-container">
                <i class="fa fa-angle-right pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ route('customers.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Customers</a></li>
              <li><a href="{{ route('suppliers.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Suppliers</a></li>
              <li><a href="{{ route('categories.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Catagories</a></li>
              <li><a href="{{ route('products.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
              <li><a href="{{ route('sales.index') }}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sales</a></li>
            </ul>
          </li>                        
                      
        
        </ul>
        
        {{-- <div class="sidebar-widgets">
          <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
          <div class="text-center">
            <img src="assets/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
            <h4 class="title-bx text-primary">View Full Report</h4>
            <a href="#" class="py-10 fs-14 mb-0 text-primary">
              Best CRM App here <i class="mdi mdi-arrow-right"></i>
            </a>
          </div>
          </div>
        <div class="copyright text-center m-25">
          <p><strong class="d-block">Jassa</strong>  <script>document.write(new Date().getFullYear())</script> </p>
        </div>
        </div> --}}
      </div>
    </div>
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="container-full">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12">
          <div class="box bg-gradient-primary">
            <div class="box-body">
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  <div  class="mx-auto w-60 position-relative"></div>
                </div>
                <div>
                  <h4 class="mt-0 text-white">Total Customers</h4>
                  <h3 class="fw-500 my-0 text-white">{{$customers}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center justify-content-between">
                <div class="w-80 h-80 rounded-circle bg-primary-light fs-40 text-center l-h-80">
                  <span class="icon-Equalizer"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                </div>
                <div>
                  <h4 class="mt-0">Total Sales</h4>
                  <h3 class="fw-500 my-0">{{$sales}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center justify-content-between">
                {{-- <div class="w-60 h-80 rounded-circle bg-success-light fs-40 text-center l-h-85">
                  <span ><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                </div> --}}
                <div>
                  <h4 class="mt-0">Total Products Available-</h4>
                  <h3 class="fw-500 my-0">{{$products}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center justify-content-between">
                <div class="w-80 h-80 rounded-circle bg-danger-light fs-40 text-center l-h-85">
                  <span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
                </div>
                <div>
                  <h4 class="mt-0">Total Suppliers</h4>
                  <h3 class="fw-500 my-0">{{$suppliers}}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales Overview</h3>
            </div>
            <div class="box-body">
              <div class="d-flex mb-50 align-items-center justify-content-between max-w-300">
                <div>
                  <p class="mb-0 text-fade">Profit</p>
                  <h3 class="my-0">$25K</h3>
                  <p class="mb-0 text-success"><i class="fa fa-arrow-up me-5"></i>2.37%</p>
                </div>
                <div class="mx-30">
                  <p class="mb-0 text-fade">Expense</p>
                  <h3 class="my-0">$39K</h3>
                  <p class="mb-0 text-success"><i class="fa fa-arrow-up me-5"></i>1.74%</p>
                </div>
                <div>
                  <p class="mb-0 text-fade">Revenue</p>
                  <h3 class="my-0">$208B</h3>
                  <p class="mb-0 text-danger"><i class="fa fa-arrow-down me-5"></i>7.37%</p>
                </div>
              </div>
              <div id="sales_overview"></div>
            </div>
          </div>
        </div>
       
        
        <div class="col-xl-8 col-12">
          <div class="box box-body">
            <div class="row">
              <div class="col-lg-8 col-12">
                <div class="box no-border mb-0 no-shadow">                  
                  <div class="box-header no-border">
                    <h3 class="box-title">Order Overview</h3>
                    <ul class="box-controls">
                      <li><button class="btn btn-xs btn-danger" href="#">Monthly</button></li>
                      <li><button class="btn btn-xs btn-info" href="#">Weeks</button></li>
                    </ul>
                  </div>
                  <div class="box-body p-0">
                    <div id="order-summary-chart"></div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12">
                <div class="box mb-0 bg-lightest">
                  <div class="box-header no-border pb-0">
                    <h4 class="box-title">Top Products</h4>
                  </div>
                  <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center mb-10">
                    <div>
                      <h5 class="mb-0">iPod</h5>
                    </div>
                    <div>
                      <h6 class="mb-0"><span class="text-success">+</span> $250</h6>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-10">
                    <div>
                      <h5 class="mb-0">iMac</h5>
                    </div>
                    <div>
                      <h6 class="mb-0"><span class="text-danger">-</span> $589</h6>
                    </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h5 class="mb-0">iPhone x</h5>
                    </div>
                    <div>
                      <h6 class="mb-0"><span class="text-success">+</span> $1292</h6>
                    </div>
                    </div>
                  </div>
                  <div class="box-footer">
                    <h4 class="mb-0">Total Sales</h4>
                    <p class="text-primary fs-18 fw-700">$8,459k</p>
                    <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (primary)</span>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-7 col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Regional Sales</h3>
            </div>
            <div class="box-body">              
              <div id="regional_sales" class="h-500"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-5 col-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sales By Customer Location</h3>
            </div>
            <div class="box-body">              
              <div id="customer_location" class="h-500"></div>
            </div>
          </div>
        </div>
        
      </div>        
    </section>
    <!-- /.content -->
    </div>
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
      <li class="nav-item">
      <a class="nav-link" href="https://therichpost.com/category/free-admin-dashboard-templates/">More Demos</a>
      </li>
    </ul>
    </div>
  </footer>
  <!-- Side panel --> 
  <!-- quick_actions_toggle -->
  <div class="modal modal-right fade" id="quick_actions_toggle" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content slim-scroll">
      <div class="modal-body bg-white p-30">
      <div class="d-flex align-items-center justify-content-between pb-30">
        <h4 class="m-0">Quick Actions<br>
        <small class="badge fs-12 badge-primary mt-10">23 tasks pending</small></h4>
        <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
          <span class="fa fa-close"></span>
        </a>
      </div>
            <div class="row">
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Accounting</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Mail-attachment fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Members</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Box2 fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Projects</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Group fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Customers</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Chart-bar fs-36"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        <span class="fs-16">Email</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Color-profile fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-16">Settings</span>
                    </a>
                </div>
                <div class="col-6">
                    <a class="waves-effect waves-light btn btn-app btn btn-primary-light btn-flat mx-0 mb-20 no-shadow py-35 h-auto d-block" href="#">
                        <i class="icon-Euro fs-36"><span class="path1"></span><span class="path2"></span></i>
                        <span class="fs-18">Orders</span>
                    </a>
                </div>
      </div>
      </div>
    </div>
    </div>
  </div>
  <!-- /quick_actions_toggle -->    
    
  <!-- quick_panel_toggle -->
  <div class="modal modal-right fade" id="quick_panel_toggle" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content slim-scroll2">
      <div class="modal-body bg-white py-20 px-0">
      <div class="d-flex align-items-center justify-content-between pb-30">
        <ul class="nav nav-tabs customtab3 px-30" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#quick_panel_logs">Audit Logs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_notifications">Notifications</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#quick_panel_settings">Settings</a>
          </li>
        </ul>
                <div class="offcanvas-close">
                    <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
            <span class="fa fa-close"></span>
          </a>
                </div>
      </div>
              <div class="px-30">
                <div class="tab-content">
                    <div class="tab-pane active" id="quick_panel_logs" role="tabpanel">
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">System Messages</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/001-glass.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Duis faucibus lorem</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/002-google.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Mauris varius augue</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/003-settings.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Aliquam in magna</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/004-dad.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Phasellus venenatis nisi</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-lightest h-50 w-50 l-h-50 rounded text-center">
                                      <img src="assets/images/svg-icon/color-svg/005-paint-palette.svg" class="h-30" alt="">
                                </div>
                                <div class="d-flex flex-column flex-grow-1 me-2 fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Vivamus consectetur</a>
                                    <span class="text-fade">Pharetra, Nulla</span>
                                </div>
                                <span class="badge badge-xl badge-light"><span class="fw-600">+125$</span></span>
                            </div>
                        </div>
                        <div class="mb-30">
                            <h5 class="fw-500 mb-15">Tasks Overview</h5>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-primary-light h-50 w-50 l-h-60 rounded text-center">
                                      <span class="icon-Library fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-primary mb-1 fs-16">Project Briefing</a>
                                    <span class="text-fade">Project Manager</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-danger-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Write fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-danger mb-1 fs-16">Concept Design</a>
                                    <span class="text-fade">Art Director</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-success-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-success mb-1 fs-16">Functional Logics</a>
                                    <span class="text-fade">Lead Developer</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center mb-30">
                                <div class="me-15 bg-info-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Attachment1 fs-24"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-info mb-1 fs-16">Development</a>
                                    <span class="text-fade">DevOps</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="me-15 bg-warning-light h-50 w-50 l-h-60 rounded text-center">
                                    <span class="icon-Shield-user fs-24"></span>
                                </div>
                                <div class="d-flex flex-column fw-500">
                                    <a href="#" class="text-dark hover-warning mb-1 fs-16">Testing</a>
                                    <span class="text-fade">QA Managers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_notifications" role="tabpanel">
                        <div>
                            <div class="media-list">
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">10:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-primary">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Johne</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">08:40</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-success">
                                    <p>Proin iaculis eros non odio ornare efficitur.</p>
                                    <span class="text-fade">by Amla</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">07:10</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-info">
                                    <p>In mattis mi ut posuere consectetur.</p>
                                    <span class="text-fade">by Josef</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">01:15</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-danger">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Rima</span>
                                  </div>
                                </a>

                                <a class="media media-single px-0" href="#">
                                  <h4 class="w-50 text-gray fw-500">23:12</h4>
                                  <div class="media-body ps-15 bs-5 rounded border-warning">
                                    <p>Morbi quis ex eu arcu auctor sagittis.</p>
                                    <span class="text-fade">by Alaxa</span>
                                  </div>
                                </a>
                              </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="quick_panel_settings" role="tabpanel">
                        <div>
                            <form class="form">
              <!--begin::Section-->
              <div>
                <h5 class="fw-500 mb-15">Customer Care</h5>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Enable Notifications:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Enable Case Tracking:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Support Portal:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-primary active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
              </div>
              <!--end::Section-->
              <div class="dropdown-divider"></div>
              <!--begin::Section-->
              <div class="pt-2">
                <h5 class="fw-500 mb-15">Reports</h5>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Generate Reports:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Enable Report Export:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Allow Data Collection:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-danger active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
              </div>
              <!--end::Section-->
              <div class="dropdown-divider"></div>
              <!--begin::Section-->
              <div class="pt-2">
                <h5 class="fw-500 mb-15">Memebers</h5>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Enable Member singup:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
                <div class="form-group mb-0 row align-items-center">
                  <label class="col-8 col-form-label">Enable Customer Portal:</label>
                  <div class="col-4 d-flex justify-content-end">
                                        <button type="button" class="btn btn-sm btn-toggle btn-warning active" data-bs-toggle="button" >
                                            <span class="handle"></span>
                                        </button>
                  </div>
                </div>
              </div>
              <!--end::Section-->
            </form>
                        </div>
                    </div>
                </div>
              </div>
      </div>
    </div>
    </div>
  </div>
  <!-- /quick_panel_toggle -->  
  
  <!-- quick_shop_toggle -->
  <div class="modal modal-right fade" id="quick_shop_toggle" tabindex="-1">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="px-15 d-flex w-p100 align-items-center justify-content-between">
        <h4 class="m-0">Shopping Cart</h4>
        <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
          <span class="fa fa-close"></span>
        </a>
        </div>
      </div>
      <div class="modal-body px-30 pb-30 bg-white slim-scroll4">
        <div class="d-flex align-items-center justify-content-between pb-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-1.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="d-flex align-items-center justify-content-between py-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-2.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="d-flex align-items-center justify-content-between py-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-3.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>
        <div class="dropdown-divider"></div>
        <div class="d-flex align-items-center justify-content-between py-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-4.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>
        <div class="dropdown-divider"></div> 
        <div class="d-flex align-items-center justify-content-between py-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-5.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>
        <div class="dropdown-divider"></div> 
        <div class="d-flex align-items-center justify-content-between py-15">
          <div class="d-flex flex-column me-2">
            <a href="#" class="fw-600 fs-18 text-hover-primary">Product Name</a>
            <span class="text-muted">When an unknown printer</span>
            <div class="d-flex align-items-center mt-2">
              <span class="fw-600 me-5 fs-18">$ 125</span>
              <span class="text-muted me-5">for</span>
              <span class="fw-600 me-2 fs-18">4</span>
              <a href="#" class="btn btn-sm btn-success-light btn-icon me-2">
                <i class="fa fa-minus"></i>
              </a>
              <a href="#" class="btn btn-sm btn-success-light btn-icon">
                <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
          <a href="#" class="flex-shrink-0">
            <img src="assets/images/product/product-6.png" class="avatar h-100 w-100" alt="" />
          </a>
        </div>  
      </div>
      <div class="modal-footer modal-footer-uniform">
        <div class="d-flex align-items-center justify-content-between mb-10">
        <span class="fw-600 text-muted fs-16 me-2">Total</span>
        <span class="fw-600 text-end">$1248.00</span>
        </div>
        <div class="d-flex align-items-center justify-content-between mb-15">
        <span class="fw-600 text-muted fs-16 me-2">Sub total</span>
        <span class="fw-600 text-primary text-end">$4125.00</span>
        </div>
        <div class="text-end">
        <button type="button" class="btn btn-primary">Place Order</button>
        </div>
      </div>
    </div>
    </div>
  </div>
  <!-- /quick_shop_toggle -->
  
</div>
<!-- ./wrapper -->
  
  <!-- ./side demo panel -->
  <div class="sticky-toolbar">      
      <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
      <span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
    </a>
      <a href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
      <span class="icon-Image"></span>
    </a>
      <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
      <span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
    </a>
  </div>
  <!-- Sidebar -->
    
  <div id="chat-box-body">
    <div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
    </div>

    <div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
          <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
          <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="assets/images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div>
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
    </div>
  </div>
  

  <script src="assets/js/vendors.min.js"></script>
  <script src="assets/js/chat-popup.js"></script>
    <script src="assets/js/feather.min.js"></script>
  
  <script src="assets/js/apexcharts.js"></script>
  <script src="assets/js/progressbar.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
  
  <script src="assets/js/template.js"></script>
  <script src="assets/js/dashboard.js"></script>
  
</body>
</html>
