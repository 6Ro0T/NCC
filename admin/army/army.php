<?php
   include('session.php');
?>
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
                <a class="header-brand" href="army.php"><i class="fa fa-graduation-cap brand-logo"></i></a>
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
						<li class="active"><a href="army.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="student.php"><i class="fa fa-graduation-cap"></></i><span>Students</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
                        <li><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
						<li><a href="events.php"><i class="fa fa-bullhorn"></i><span>Events</span></a></li>
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
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
					<ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard">Dashboard</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="student.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span>Students</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="add_course.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-book"></i>
                                    <span>Add Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="addstudent.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-users"></i>
                                    <span>Add Students</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="attendance.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>Attendance</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="events.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Events</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                <div class="row clearfix"> 
                    <div class="row clearfix row-deck">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Exam Toppers</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <div class="item-action dropdown ml-2">
                                                
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
                                        <div>
                                            <button type="button" class="btn btn-primary">Export</button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
      
                                    <div class="card-header">
                                        <h3 class="card-title">Student List</h3>
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
        </div>
		<div class="tab-pane active" id="TaskBoard-all">
                        <div class="table-responsive">
                            <table class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>SL No</th>
                                        <th>Task</th>
                                        <th class="w200"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <h6 class="mb-0">New code Update on github</h6>
                                            <span>It is a long established fact that a reader will be distracted...</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 3 Jun 2019</div>
                                            <div class="text-pink">End: 15 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-blue">Planned</span>
                                        </td>
                                        <td>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <h6 class="mb-0">Design Events</h6>
                                            <span>It is a long established fact that a reader will be distracted...</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 02 Jun 2019</div>
                                            <div class="text-pink">End: 08 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-green">Completed</span>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>100%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 100%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <h6 class="mb-0">Feed Details on Dribbble</h6>
                                            <span>The point of using Lorem Ipsum is that...</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 3 Jun 2019</div>
                                            <div class="text-pink">End: 15 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-orange">In progress</span>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>35%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <h6 class="mb-0">New code Update on github</h6>
                                            <span>It is a long established fact that a reader will be distracted...</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 13 Jun 2019</div>
                                            <div class="text-pink">End: 23 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-orange">In progress</span>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>75%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-green" role="progressbar" style="width: 75%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <h6 class="mb-0">New code Update on github</h6>
                                            <span>Contrary to popular belief, Lorem Ipsum is not simply random text.</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar5.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar6.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 8 Jun 2019</div>
                                            <div class="text-pink">End: 15 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-orange">In progress</span>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>35%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <h6 class="mb-0">Angular App Design bug</h6>
                                            <span>There are many variations of passages of Lorem Ipsum available...</span>
                                        </td>
                                        <td>
                                            <ul class="list-unstyled team-info mb-0 w150">
                                                <li><img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar4.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                                <li><img src="../assets/images/xs/avatar7.jpg" data-toggle="tooltip" data-placement="top" title="Avatar" alt="Avatar"></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <div class="text-info">Start: 3 Jun 2019</div>
                                            <div class="text-pink">End: 15 Jun 2019</div>
                                        </td>
                                        <td>
                                            <span class="tag tag-orange">Planned</span>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-left"><strong>35%</strong></div>
                                                <div class="float-right"><small class="text-muted">Progress</small></div>
                                            </div>
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-azure" role="progressbar" style="width: 35%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
        <!-- Start main footer -->
        <div class="section-body">
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            Copyright © 2021 | Phoenix Studios | <a href="https://kishannayak.000webhostapp.com/">Kishan Nayak</a>.
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
