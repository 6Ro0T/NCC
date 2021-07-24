<?php
   include('session.php');
?><!doctype html>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>MyNCC : Admin</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
<link rel="stylesheet" href="../../assets/plugins/summernote/dist/summernote.css"/>


<!-- Core css -->
<link rel="stylesheet" href="../../assets/css/style.min.css"/>
</head>

<body class="font-muli theme-cyan gradient">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    <!-- Start Main top header -->
    <div id="header_top" class="header_top">
        <div class="container">
            <div class="hleft">
                <a class="header-brand" href="index.html"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="logout.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->


    <!-- Start Quick menu with more functio -->
    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">MyNCC<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-admin">Admin</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="payments.php"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-graduation-cap"></i><span>Add Courses</span></a></li>
                        <li><a href="taskboard.php"><i class="fa fa-list-ul"></i><span>Taskboard</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-bed"></i><span>Add Student</span></a></li>
                        <li><a href="transport.php"><i class="fa fa-truck"></i><span>Transport</span></a></li>
                        <li><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
                        <li><a href="leave.html"><i class="fa fa-flag"></i><span>Leave</span></a></li>
                        <li><a href="setting.php"><i class="fa fa-gear"></i><span>Settings</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box green" data-toggle="tooltip" title="New Professors">5</div>
                                <a href="professors.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-black-tie"></i>
                                    <span>Professors</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="app-contact.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-address-book"></i>
                                    <span>Contact</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <div class="ribbon-box orange" data-toggle="tooltip" title="New Staff">8</div>
                                <a href="staff.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-user-circle-o"></i>
                                    <span>Staff</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="app-filemanager.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-folder"></i>
                                    <span>FileManager</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="library.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-book"></i>
                                    <span>Library</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="holiday.html" class="my_sort_cut text-muted">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Holiday</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                        <div class="row clearfix">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">University Report</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    
                                    
                            </div>
                        </div>                
                        <div class="row clearfix row-deck">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Exam Toppers</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                <a href="javascript:void(0)" data-toggle="dropdown"><i class="fe fe-more-vertical"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-eye"></i> View Details </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-share-alt"></i> Share </a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-cloud-download"></i> Download</a>                                            
                                                    <div class="dropdown-divider"></div>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-copy"></i> Copy to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-folder"></i> Move to</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-edit"></i> Rename</a>
                                                    <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive" style="height: 310px;">
                                        <table class="table card-table table-vcenter text-nowrap table-striped mb-0">
                                            <tbody>
                                                <tr>
                                                    <th>No.</th>                                                    
                                                    <th>Name</th>
                                                    <th></th>
                                                    <th>Marks</th>
                                                    <th>%AGE</th>
                                                </tr>
                                                <tr>
                                                    <td>11</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar1.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Merri Diamond</div>
                                                        <div class="text-muted">Science</div>
                                                    </td>
                                                    <td>199</td>
                                                    <td>99.00</td>
                                                </tr>
                                                <tr>
                                                    <td>23</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar2.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Sara Hopkins</div>
                                                        <div class="text-muted">Mechanical</div>
                                                    </td>
                                                    <td>197</td>
                                                    <td>98.00</td>
                                                </tr>
                                                <tr>
                                                    <td>41</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar3.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Allen Collins</div>
                                                        <div class="text-muted">M.C.A.</div>
                                                    </td>
                                                    <td>197</td>
                                                    <td>98.00</td>
                                                </tr>
                                                <tr>
                                                    <td>17</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar4.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Erin Gonzales</div>
                                                        <div class="text-muted">Arts</div>
                                                    </td>
                                                    <td>194</td>
                                                    <td>97.00</td>
                                                </tr>
                                                <tr>
                                                    <td>57</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar5.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Claire Peters</div>
                                                        <div class="text-muted">Science</div>
                                                    </td>
                                                    <td>192</td>
                                                    <td>95.00</td>
                                                </tr>
                                                <tr>
                                                    <td>85</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar6.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Claire Peters</div>
                                                        <div class="text-muted">Science</div>
                                                    </td>
                                                    <td>192</td>
                                                    <td>95.00</td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td class="w40">
                                                        <div class="avatar">
                                                            <img class="avatar" src="../../assets/images/xs/avatar7.jpg" alt="avatar">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div>Claire Peters</div>
                                                        <div class="text-muted">Science</div>
                                                    </td>
                                                    <td>191</td>
                                                    <td>95.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="card-footer d-flex justify-content-between">
                                        <div class="font-14"><span>Measure How Fast You’re Growing Monthly Recurring Revenue. <a href="#">View All</a></span></div>
                                        <div>
                                            <button type="button" class="btn btn-primary">Export</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Performance</h3>
                                    </div>
                                    <div class="card-body">
                                        <div id="apex-radar-multiple-series"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">New Student List</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                    
                                                        <th>Name</th>
                                                        <th>Email</th>
                
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    include('conn.php');
                                                    $a=1;
                                                    $sql="SELECT * FROM student where division='army'";
                                                    $stmt=mysqli_query($conn,$sql);
                                                    
                                                    while($row=mysqli_fetch_array($stmt)){
                                                        echo "<tr>";
                                                            echo "<td>".$row['name']."</td>";
                                                            echo "<td>".$row['email']."</td>";
                                                            
                                                        echo "</tr>";
                                                    }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
        </div>
        <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2019 <a href="https://themeforest.net/user/puffintheme/portfolio">PuffinTheme</a>.
                        </div>
                        <div class="col-md-6 col-sm-12 text-md-right">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item"><a href="../../doc/index.html">Documentation</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)">FAQ</a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-outline-primary btn-sm">Buy Now</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start all plugin js -->
<script src="../../assets/bundles/counterup.bundle.js"></script>
<script src="../../assets/bundles/apexcharts.bundle.js"></script>
<script src="../../assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/page/index.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>
</html>
