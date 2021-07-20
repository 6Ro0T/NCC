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
                <a href="../index.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
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
                        <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="viewat.php"><i class="fa fa-user-circle-o"></i><span>View Attendance</span></a></li>
                        <li><a href="staff.php"><i class="fa fa-users"></i><span>Staffs</span></a></li>
                        <li><a href="courses.php"><i class="fa fa-graduation-cap"></i><span>Classes</span></a></li>                        
                        <li class="active"><a href="library.php"><i class="fa fa-book"></i><span>Study Materials</span></a></li>
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
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Subject</th>
                                                <th>Department</th>
                                                <th>Year</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Management Basics</td>
                                                <td>Designing</td>
                                                <td>Architecture</td>
                                                <td>Second Year</td>
                                                <td>CD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Java Black Book</td>
                                                <td>Graphics</td>
                                                <td>MBA</td>
                                                <td>Third Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Parallel Computing</td>
                                                <td>Politics</td>
                                                <td>Architecture</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Networking</td>
                                                <td>Computer</td>
                                                <td>MBA</td>
                                                <td>Last Year</td>
                                                <td>Newspaper</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Web Programming</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Book</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Designing</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Computer Engineering</td>
                                                <td>Second Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Computer Fundamental</td>
                                                <td>Animation</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>CD</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Time History</td>
                                                <td>Management</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Politics</td>
                                                <td>Designing</td>
                                                <td>Mechanical</td>
                                                <td>Second Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Designing</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Mechanics</td>
                                                <td>Computer</td>
                                                <td>Computer Engineering</td>
                                                <td>Second Year</td>
                                                <td>DVD</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Computer Fundamental</td>
                                                <td>Animation</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>CD</td>
                                                <td>In Stock</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Time History</td>
                                                <td>Management</td>
                                                <td>Mechanical</td>
                                                <td>Third Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Politics</td>
                                                <td>Designing</td>
                                                <td>Mechanical</td>
                                                <td>Second Year</td>
                                                <td>Newspaper</td>
                                                <td>Out of Stock</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Library-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Subject" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Department" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Type" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Year" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Status" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg btn-simple">Add Library</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Library-add-Boot">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <form class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Title <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Subject  <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="sub">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Mathematics</option>
                                            <option value="Category 2">Science</option>
                                            <option value="Category 3">Software</option>
                                            <option value="Category 3">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Purchase Date <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Auther Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Publisher <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Price <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Department <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="departmnt">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Mathematics</option>
                                            <option value="Category 2">Engineering</option>
                                            <option value="Category 3">Science</option>
                                            <option value="Category 3">M.B.A.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Asset Type <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="assttype">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Book</option>
                                            <option value="Category 2">CD</option>
                                            <option value="Category 3">DVD</option>
                                            <option value="Category 3">NewsPaper</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Asset Details <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
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
                                <li class="list-inline-item"><a href="../../doc/index.php">Documentation</a></li>
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
