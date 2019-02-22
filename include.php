<?php include("connection.php") ?>
<?php 

  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['usrname']);
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <title>Dashboard - HRMS admin template</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/line-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <style>
.dropdown21 {
  position: relative;
  display: inline-block;
}

.dropdown-content21 {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown21:hover .dropdown-content21 {
  display: block;
}
</style>
    <body>
        <div class="main-wrapper">
            <div class="header">
                <div class="header-left">
                    <a href="index.html" class="logo logo-big">
                        <img src="assets/img/logo.png" width="40" height="40" alt="">
                    </a>
                    <a href="index.html" class="logo logo-small">
                        <img src="assets/img/logo.png" width="30" height="30" alt="">
                    </a>
                </div>
                <a id="toggle_btn" href="javascript:void(0);"><i class="la la-bars"></i></a>
                <div class="page-title-box pull-left">
                    <h3>INSIGNIS</h3>
                </div>
                <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
                <?php if (isset($_SESSION['usrname'])) { ?>
                <ul class="nav navbar-nav navbar-right user-menu pull-right">
                    <li class="dropdown hidden-xs">
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge bg-purple pull-right">3</span></a>-->
                        <div class="dropdown-menu notifications">

<li>
    <div class="dropdown21">
                <span style="margin-right:50px; margin-left:10px; margin-top:100px; font-size:15px;" ><?php echo $_SESSION['usrname'];?>⮟</span>
  <div class="dropdown-content21">
  <p><a href="index.php?logout='1'">Sign Out <span class="glyphicon glyphicon-log-out pull-right"></span></a></p>

  </div>
</li>
</div>

                </ul>

                
            </div>
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
                    <div id="sidebar-menu" class="sidebar-menu">
                        <ul>
                            <li class="active"> 
                                <a href="index.php"><i class="la la-dashboard"></i> <span>Dashboard</span></a>
                            </li>
                            <li class="submenu">
                                <a href="employees.php" class="noti-dot"><i class="la la-user"></i> <span> Employees</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="employees.html">All Employees</a></li>
                                    <li><a href="holidays.html">Holidays</a></li>
                                    <li><a href="leaves.html">Leave Requests <span class="badge bg-primary pull-right">1</span></a></li>
                                    <li><a href="attendance.html">Attendance</a></li>
                                    <li><a href="departments.html">Departments</a></li>
                                    <li><a href="designations.html">Designations</a></li>
                                </ul>
                            </li>
                            <li> 
                                <a href="data.php"><i class="la la-users"></i> <span>Data</span></a>
                            </li>
                            <li> 
                                <a href="projects.html"><i class="la la-rocket"></i> <span>Projects</span></a>
                            </li>
                            <!--<li> 
                                <a href="tasks.html"><i class="la la-tasks"></i> <span>Tasks</span></a>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-phone"></i> <span> Calls</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="voice-call.html">Voice Call</a></li>
                                    <li><a href="video-call.html">Video Call</a></li>
                                    <li><a href="incoming-call.html">Incoming Call</a></li>
                                </ul>
                            </li>-->
                            <li> 
                                <a href="revenue.php"><i class="la la-book"></i> <span>Revenue</span></a>
                            </li>
                            <li> 
                                <a href="leads.php"><i class="la la-user-secret"></i> <span>Sales</span></a>
                            </li>
                            <!--<li class="submenu">
                                <a href="#"><i class="la la-files-o"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="estimates.html">Estimates</a></li>
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="payments.html">Payments</a></li>
                                    <li><a href="expenses.html">Expenses</a></li>
                                    <li><a href="provident-fund.html">Provident Fund</a></li>
                                    <li><a href="taxes.html">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="salary.html"> Employee Salary </a></li>
                                    <li><a href="salary-view.html"> Payslip </a></li>
                                </ul>
                            </li>-->
                            <li> 
                                <a href="worksheet.html"><i class="la la-clock-o"></i> <span>Timing Sheet</span></a>
                            </li>
   

                            <li> 
                                <a href="inbox.html"><i class="la la-at"></i> <span>Email</span></a>
                            </li>
 
                            <li> 
                                <a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
                            </li>
     
                            <li> 
                                <a href="users.php"><i class="la la-user-plus"></i> <span>Users</span></a>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
<?php } else { ?>
  <ul class="nav navbar-nav navbar-right">
  <li><a href="register.php"><span class="glyphicon glyphicon-user" style="color:orange"></span><span style="color:rgb(255,20,147);"> Sign Up</span></a></li>
  <li><a href="login.php"><span class="glyphicon glyphicon-log-in" style="color:orange"></span> <span style="color:rgb(255,20,147);">Login</span></a></li>
    </ul>
    <?php } ?>
</div>
        <div class="sidebar-overlay" data-reff="#sidebar"></div>
        <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.slimscroll.js"></script>
        <script type="text/javascript" src="assets/plugins/morris/morris.min.js"></script>
        <script type="text/javascript" src="assets/plugins/raphael/raphael-min.js"></script>
        <script type="text/javascript" src="assets/js/chart.js"></script>
        <script type="text/javascript" src="assets/js/app.js"></script>
        
    </body>
</html>



