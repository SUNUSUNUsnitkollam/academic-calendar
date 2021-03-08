<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>admin/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo base_url()?>admin/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Academic Calendar
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url()?>admin/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo base_url()?>admin/assets/demo/demo.css" rel="stylesheet" />
</head>

<style >
  body
  {
    background-image:url("../img/a.jpg");
    background-size: cover;
  }
</style>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="<?php echo base_url()?>admin/assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="<?php echo base_url()?>main/admin" class="simple-text logo-normal">
          ACADEMIC CALENDER
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              <p>CALENDAR</p>
            </a>
          </li>
          <li class="nav-item   ">
            <a class="nav-link" href="<?php echo base_url()?>main/batch">
              <i class="material-icons">dashboard</i>
              <p>ADD BATCH DETAILS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/chart">
              <i class="material-icons">dashboard</i>
              <p>PERFORMANCE TRACKER</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/eventdetail3">
              <i class="material-icons">content_paste</i>
              <p>ACADEMIC EVENTS</p>
            </a>
          </li>
          <!-- <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/timetable">
              <i class="material-icons">library_books</i>
              <p>TIMETABLES</p>
            </a>
          </li> -->
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/examnotification">
              <i class="material-icons">bubble_chart</i>
              <p>EXAMS</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo base_url()?>main/notificationview">
              <i class="material-icons">notifications</i>
              <p>Notification</p>
            </a>
          </li>
          
          <!-- <li class="nav-item ">
            <a class="nav-link" href="./rtl.html">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li>
          <li class="nav-item active-pro ">
            <a class="nav-link" href="./upgrade.html">
              <i class="material-icons">unarchive</i>
              <p>Upgrade to PRO</p>
            </a>
          </li> -->
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->

      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <!-- <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Status
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li> -->
              <!-- <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a> -->
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?php echo base_url()?>main/log">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div background-image="<?php echo base_url()?>admin/assets/img/ad.png">
          </div>
      </nav>
  <div class="content mt-5">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card bg-dark " style="width: 70rem; height:28rem;">
                <div class="card-header card-header-info ">
                  <h4 class="card-title">Batch details</h4>
                  <p class="card-category"></p>
                </div>
<div class="card-body p-5">
                  <form action="<?php echo base_url()?>main/batchinsert" method="post">
                    <div class="row">
                      <div class="col-md-8 mt-5 ">
                        <div class="form-group ">
                          <label class="bmd-label-floating text-white">Batch name</label>
                          <input class="form-control " list="batch" name="bname">
      <datalist id="batch">
        <option value="DDU-JSD">
        <option value="YUVA-JSD">
        <option value="DDU-UI">
        <option value="YUVA-UI">
      </datalist>
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating text-white">Start Date</label>
                          <input type="date" class="form-control"name="startdate">
                        </div>
                      </div>
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating text-white">End Date</label>
                          <input type="date" class="form-control"name="enddate">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating text-white">Total days</label>
                          <input type="text" class="form-control"name="totalday">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating text-white">Total Hours</label>
                          <input type="text" class="form-control"name="totalhr">
                        </div>
                      </div>
                    </div>
                   
                    <button type="submit" class="btn btn-info ">Submit</button>
                    <button  class="btn btn-info "><a class="text-white" href="<?php echo base_url()?>main/batchdetail">VIEW BATCH</a></button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </body>
          </html>


