<?php
   include('session.php');
   echo $user_check;
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>MyNCC : Staff</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../../assets/plugins/dropify/css/dropify.min.css">
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
                <a href="../index.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Quick menu with more functio -->
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
                        <li class="active"><a href="staff.php"><i class="fa fa-user-circle-o"></i><span>Staffs</span></a></li>
                        <li><a href="courses.php"><i class="fa fa-graduation-cap"></i><span>Classes</span></a></li>                        
                        <li><a href="library.php"><i class="fa fa-book"></i><span>Study Materials</span></a></li>
                        <li><a href="holiday.php"><i class="fa fa-bullhorn"></i><span>Events</span></a></li>
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
                        <h1 class="page-title">Staff</h1>
                        <ol class="breadcrumb page-breadcrumb">

                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Staff-all">
                        <div class="card">
                            <div class="table-responsive">
                                <table class="table table-hover table-vcenter text-nowrap table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Serial Number</th>
                                            <th>Name</th>
                                            <th>Number</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            
                                        </tr>
                                        <?php 
                                        include('conn.php');
                                        $roll=$row['roll_number'];
                                        $sql="select * from attendance where roll_number='$roll'";
                                        $result=mysqli_query($conn,$sql);
                                        $serial=0;
                                        $counter=0;
                                        while($row=mysqli_fetch_array($result)){
                                            $serial++;
                                    
                                    ?>
                                    </thead>
                                    <tbody>
                                    
                                        <tr>
                                        
                                        <td><?php echo $serial;?></td>
                                        <td><?php echo $row['name'];?></td>
                                        <td><?php echo $row['roll_number']; ?></td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td><?php echo $row['date']; ?></td>
                                        
                                            
                                        <?php 
                                            $counter++;    
                                        } ?>
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
        </div>
    </div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../assets/plugins/dropify/js/dropify.min.js"></script>
<script src="../../assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/form/dropify.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>
</html>
