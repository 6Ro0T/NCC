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
<title>MyNCC : Library</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../../assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

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
    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">MyNCC<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">Cadets</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="army.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="viewat.php"><i class="fa fa-black-tie"></i><span>View Attendance</span></a></li>
                        <li><a href="staff.php"><i class="fa fa-users"></i><span>Staff</span></a></li>
                        <li><a href="courses.php"><i class="fa fa-graduation-cap"></i><span>Classes</span></a></li>                        
                        <li class="active"><a href="library.php"><i class="fa fa-book"></i><span>Study Materials</span></a></li>
                        <li><a href="quiz.php"><i class="fa fa-question-circle"></i><span>View Quiz</span></a></li>
                        <li><a href="holiday.php"><i class="fa fa-bullhorn"></i><span>Events</span></a></li>
						<li><a href="gallery.php"><i class="fa fa-camera-retro"></i><span>Gallery</span></a></li>
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
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Study Materials</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
							<li class="breadcrumb-item">Cadets</li>
                            <li class="breadcrumb-item active" aria-current="page">Study Materials</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Library-all">Study Materials</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Library-all">
                        <div class="card">
                           <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-striped table_custom border-style spacing5">
                                       <thead>
                                             <tr>
                                                <!-- <th>#</th> -->
                                                <th>SR No</th>
                                                <th>Subject</th>
                                                <th>Department</th>
                                                <th>Year</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>SD_SW_Common Subjects Handbook</td>
                                                <td>Common Subject</td>
                                                <td>All Year</td>
                                                <td><a href="https://pdfhost.io/v/X.hMeTxfg_sdswcommonsubject.pdf" target="_blank">View Here</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>SD_SW_Army Cadet Handbook</td>
                                                <td>Army</td>
                                                <td>All Year</td>
                                                <td><a href="https://pdfhost.io/v/3cS5kjUgO_Army_Cadet_Handbook.pdf" target="_blank">View Here</a></td>
                                            </tr>
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

<!-- Start Plugin Js -->
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../assets/bundles/dataTables.bundle.js"></script>
<script src="../../assets/plugins/sweetalert/sweetalert.min.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script src="assets/js/table/datatable.js"></script>
</body>
</html>
