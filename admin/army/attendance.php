<?php
   include('session.php');
   include('conn.php');
   date_default_timezone_set('Asia/Kolkata');
   $flag=0;
   $dat=0;
   $count=0;
   $curdate=date("Y-m-d");
   
   if(isset($_POST['submit']))
   {
        $date=date("Y-m-d");
        if($date>$curdate){
                $dat=1;
        }
        else{
             $sql = "SELECT date FROM attendance WHERE date='$date'";
             $check = mysqli_query($conn,$sql);
             $count = mysqli_num_rows($check);
            foreach($_POST['status'] as $id=>$attendance)
            {
                $stname=$_POST['sname'][$id];
                $rollnumber=$_POST['roll_num'][$id];
                $division=$_POST['division'];
                if($count==0){
                    $sql="INSERT INTO `attendance`(`name`, `roll_number`, `status`, `date`,`division`) VALUES ('$stname','$rollnumber','$attendance','$date','$division')";
                    $result=mysqli_query($conn,$sql);
                    if($result)
                        $flag=1;
                }
            }
        
        }
   }
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Ericsson :: Attendance</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />

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
                    <a href="page-search.html" class="nav-link icon"><i class="fe fe-search" data-toggle="tooltip" data-placement="right" title="Search..."></i></a>
                    <a href="app-email.html"  class="nav-link icon app_inbox"><i class="fe fe-inbox" data-toggle="tooltip" data-placement="right" title="Inbox"></i></a>
                    <a href="app-filemanager.html"  class="nav-link icon app_file xs-hide"><i class="fe fe-folder" data-toggle="tooltip" data-placement="right" title="File Manager"></i></a>
                    <a href="app-social.html"  class="nav-link icon xs-hide"><i class="fe fe-share-2" data-toggle="tooltip" data-placement="right" title="Social Media"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon theme_btn"><i class="fe fe-feather"></i></a>
                    <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fe fe-settings"></i></a>
                </div>
            </div>
            <div class="hright">
                <a href="javascript:void(0)" class="nav-link icon right_tab"><i class="fe fe-align-right"></i></a>
                <a href="logout.php" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
            </div>
        </div>
    </div>
    <!-- Start Rightbar setting panel -->
    
    <!-- Start Theme panel do not add in project -->
    
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
                        <li><a href="leave.php"><i class="fa fa-flag"></i><span>Leave</span></a></li>
                        <li><a href="setting.php"><i class="fa fa-gear"></i><span>Settings</span></a></li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                        
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Attendance</h1>

                    </div>
                    <a href="view_at.php" class="btn btn-info btn-sm">View All Attendance</a>
                </div>
               <form method="POST" action="attendance.php">
               Date:<?php echo date("Y-m-d");?>
               <div class="text-md-center">
                  </strong>Today: <?php echo date("Y-m-d");?></strong>
                </div>
            </div>
            
        </div>
        
        <div class="section-body mt-4">
        
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="table-responsive"> 
                            <?php if($flag) {?>
                        <div class="alert alert-success">
                        <Strong>Attendance added Succesfully</strong>
                        </div>
                        <?php } ?>
                        <?php if($dat) {?>
                        <div class="alert alert-danger">
                        <Strong>Cannot Use Future Date</strong>
                        </div>
                        <?php } ?>
                        <?php if($count){?>
                        <div class="alert alert-danger">
                        <Strong>Attendance already marked</strong>
                        </div>
                        <?php } ?>
                                                         
                                <table class="table table-sm table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>Serial number</th>
                                       <th>Roll Number</th>
                                        <th>Name</th> 
                                       <th>isPresent</th>
                                     </tr>
                                        <?php 
                                        include('conn.php');
                                        $sql="select * from student";
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
                                        <td><?php echo $row['roll_number'];?></td>
                                        <input type='hidden' value='<?php echo $row['roll_number'];?>' name='roll_num[]'>
                                        <td><?php echo $row['name']; ?></td>
                                        <input type='hidden' value='<?php echo $row['name'];?>' name='sname[]'>
                                        <input type="hidden" value="<?php echo $row['division'];?>" name="division">
                                        <td>
                                            <input type="radio" name="status[<?php echo $counter;?>]" value="Present" required>Present
                                            <input type="radio" name="status[<?php echo $counter;?>]" value="Absent" required>Absent
                                        </td>
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
               <button type="submit" class="btn btn-primary btn-block" name="submit">SAVE</button>
            </div>
        </div>
        
        </form>
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

<!-- Start Plugin Js -->

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>
