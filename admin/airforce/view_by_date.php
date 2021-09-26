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
                <a class="header-brand" href="airforce.php"><i class="fa fa-graduation-cap brand-logo"></i></a>
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
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-admin">Admin</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
						<li><a href="airforce.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="student.php"><i class="fa fa-graduation-cap"></></i><span>Students</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
                        <li class="active"><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
						<li><a href="quiz.php"><i class="fa fa-quora"></i><span>Add Quiz</span></a></li>
						<li><a href="events.php"><i class="fa fa-bullhorn"></i><span>Events</span></a></li>
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
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Attendance</li>
                        </ol>
                    </div>
					<ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">Update</a></li>
                    </ul>
                </div>
            </div>
            
        </div>
        
        <div class="section-body mt-4">
			
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                    <?php $date=$_POST['submit'];?>
					<h5>Date:<?php echo $date;?></h5> 
                        <div class="card">
                            
                            <div class="table-responsive"> 
							  
							</div>
                        
								<form method="POST" action="update_att.php">
                                <table class="table table-sm table-hover table-striped table-vcenter mb-0 text-nowrap">
                                    <thead>
                                    <tr>
                                        <th style="background-color:#e8e6e6" width="15%">Serial number</th>
										<th style="background-color:#e8e6e6" width="15%">Roll Number</th>
                                        <th style="background-color:#e8e6e6" width="40%">Name</th> 
										<th style="background-color:#e8e6e6" width="30%">isPresent</th>
                                     </tr>
                                        <?php 
                                        include('conn.php');
										
                                        $sql="select * from attendance where date='$date' and division='airforce'";
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
                                        <input type="hidden" value='<?php echo $row['date'];?>' name='date'>
                                        <td>
                                            <input type="radio" name="status[<?php echo $counter;?>]" value="Present" required <?php if($row['status']=="Present"){echo "checked=checked";}?>  >Present
                                            <input type="radio" name="status[<?php echo $counter;?>]" value="Absent" required <?php if($row['status']=="Absent"){echo "checked=checked";}?>>Absent
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
				<div class="text-center">
				<button type="submit" class="btn btn-primary " name="update">UPDATE</button>
                
				</form>
				<a href="view_at.php"><button type="" class="btn btn-primary ">BACK</button></a>
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

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>
