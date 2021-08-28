<?php
   include('session.php');
   include('conn.php');
   $flag=0;
   $count=0;
   if(isset($_POST['submit']))
   {
		$sql="UPDATE `student` SET `roll_number`='$_POST[roll_num]',`name`='$_POST[name]',`Cadet_rank`='$_POST[rank]',`year`='$_POST[year]',`dob`='$_POST[dob]',`phone`='$_POST[phone]',`email`='$_POST[email]',`password`='$_POST[password]',`division`='$_POST[division]',`role`='$_POST[role]' WHERE id='$_POST[submit]'";
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
    
    <!-- Start Theme panel do not add in project -->
    
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
						<li><a href="army.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li class="active"><a href="student.php"><i class="fa fa-graduation-cap"></></i><span>Students</span></a></li>
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
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Update Student</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Student</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        
                       
                    </ul>
					<a href="student.php" class="btn btn-info btn-sm">Back</a>
                </div>
				
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="Hostel-add">
					<?php if($flag) {?>
                        <div class="alert alert-success">
                        <Strong>Student Updated Successfully..</strong>
                        </div>
                        <?php } ?>
                        <div class="card">
                
						<?php 
						include('conn.php');
						if(isset($_POST['update'])){
						$email=$_POST['update'];
						$sql="select * from student where email='$email'";
						$result=mysqli_query($conn,$sql);
						$row=mysqli_fetch_array($result);
						
						
						?>
                            <form class="card-body" method="post" action="update_student.php">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Cadet Name  </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value='<?php echo $row['name'];?>'name='name' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Regimental Number.  </label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" value='<?php echo $row['roll_number'];?>' name='roll_num' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Cadet Rank. </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value='<?php echo $row['Cadet_rank'];?>'name='rank' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Year.  </label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" value='<?php echo $row['year'];?>' name='year' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Date of Birth.  </label>
                                    <div class="col-md-7">
                                        <input type="date" class="form-control" value='<?php echo $row['dob'];?>' name='dob' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Phone Number.  </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" value='<?php echo $row['phone'];?>' name='phone' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">E-mail  </label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" value='<?php echo $row['email'];?>' name='email' required placeholder ="abc@ncc.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Password  </label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" value='<?php echo $row['password'];?>' name='password' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-md-7">
                                        <input type="hidden" class="form-control" name='role' value='student' required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <input type="hidden" class="form-control" name='division'value='army' required>
                                    </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-md-3 col-form-label"></label>
                                  <div class="col-md-7">
                                 <button align="center"type="submit" name='submit' value="<?php echo $row['id']?>"class="btn btn-primary">Update</button>
                                
                                    </div>
                                </div>
                            </form>
						<?php } ?> 	
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

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>
