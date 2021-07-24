<?php
   include('session.php');
   include('conn.php');
   $flag=0;
   if(isset($_POST['delete'])){
        
        $mail=$_POST['delete'];
        $sql="DELETE FROM `student` WHERE email='$mail'";
        $result=mysqli_query($conn,$sql);
        if($result)
            $flag=1;
   
   }

?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Holiday</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../../assets/plugins/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="../../assets/plugins/fullcalendar/fullcalendar.min.css">
<link rel="stylesheet" href="../../assets/plugins/sweetalert/sweetalert.css">

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
                <a class="header-brand" href="index.php"><i class="fa fa-graduation-cap brand-logo"></i></a>
                <div class="dropdown">
                    <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fe fe-align-center"></i></a>
                    <a href="page-search.php" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    <a href="app-email.php"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.php"  class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.php"  class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
                <a href="login.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    <div id="rightsidebar" class="right_sidebar">
        <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings" aria-expanded="true">Settings</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity" aria-expanded="false">Activity</a></li>
        </ul>
        
    </div>
    <!-- Start Theme panel do not add in project -->

    <!-- Start Quick menu with more functio -->
    
    <!-- Start Main leftbar navigation -->
  <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Ericsson<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-admin">Admin</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="payments.php"><i class="fa fa-credit-card"></i><span>Payments</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-graduation-cap"></i><span>Add Courses</span></a></li>
                        <li><a href="view_all.php"><i class="fa fa-list-ul"></i><span>View all Students</span></a></li>
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
        <!-- Start Page header -->
         <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">View All Student</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
							<li class="breadcrumb-item">Cadets</li>
                            <li class="breadcrumb-item active" aria-current="page">Classes</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" >Student</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Student List</h1>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" >
                        <div class="card">
                            <div class="card-body">
                            <form method="post" action="view_all.php">
                                <table class="table  spacing5">
                                <?php if($flag) {?>
                                <div class="alert alert-success">
                                <Strong>Student Deleted Successfully.</strong>
                                </div>
                                <?php } ?>
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>DELETE</th>
                                                <th>UPDATE</th>
                                            </tr>
                                            <?php 
                                        include('conn.php');
                                        $sql="select * from student where division='army'";
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
                                                <td><?php echo $row['email'];?></td>
                                                
                                                
                                                <td>
                                                    <button type="submit"  class="btn btn-icon btn-sm" name='delete' value="<?php echo $row['email'];?>"><i class="fa fa-trash-o text-danger"></i></button>
                                                   
                                                </td>
                                                </form>
                                                <form method="POST" action="update_student.php">
                                               <td>
                                               <button type="submit"  class="btn btn-icon btn-sm" name='update' value="<?php echo $row['email'];?>"><i class="fa fa-pencil-square-o"></i></button>
                                               </td>
                                               </form
                                            </tr>
                                          <?php
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
        <!-- Start main footer -->
    </div>    
</div>

<!-- Add New Event popup -->

<!-- Add Direct Event popup -->

<!-- Event Edit Modal popup -->




<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="../../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../assets/bundles/dataTables.bundle.js"></script>
<script src="../../assets/bundles/fullcalendar.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
<script src="assets/js/table/datatable.js"></script>
<script src="assets/js/page/calendar.js"></script>
</body>
</html>
