<?php
   include('session.php');
   include('conn.php');
   $flag=0;
   if(isset($_POST['submit'])){
    $cname=$_POST['cname'];
	$id=$_POST['submit'];
    $professor=$_POST['professor'];
    $url=$_POST['url'];
    $urlid = substr($url,32);
    $description=$_POST['description'];
    $division=$_POST['division'];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["file"]["tmp_name"];
    $uploads_dir = '../../images';
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
    $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&part=statistics&id=$urlid&key=AIzaSyCUzBxx5oXGt57tKJTnnwZWAXPj-rz7H3A");
    $duration = json_decode($dur, true);
    foreach ($duration['items'] as $vidTime) {
        $vTime= $vidTime['contentDetails']['duration'];
        
    }
    $str1=substr($vTime,2);
    $sql="UPDATE `course` SET `coursename`='$cname',`duration`='$str1',`professor`='$professor',`url`='$urlid',`filename`='$pname',`description`='$description',`division`='$division' WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $flag=1;
		$id=$id;
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
                        <li class="active"><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
                        <li><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
                        <li><a href="quiz.php"><i class="fa fa-question-circle"></i><span>Add Quiz</span></a></li>
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
                        <h1 class="page-title">Update Courses</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Update Courses</li>
                        </ol>
                    </div>
                     <a href="view_all_courses.php" class="btn btn-info btn-sm">Back</a>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-pane" id="Courses-add-Boot">
			
                        <div class="">
						 <?php if($flag) {?>
                        <div class="alert alert-success">
                        <Strong>Course Updated Successfully..</strong>
                        </div>
                        <?php } ?>
                            <form class="card-body" method="POST" action="update_course.php" enctype="multipart/form-data">
								<?php
								include('conn.php');
								if(isset($_POST['update'])){
								$id=$_POST['update'];
								$sql="select * from course where id='$id'";
								$result=mysqli_query($conn,$sql);
								$row=mysqli_fetch_array($result);
								
								?>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Course Name  </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control"name="cname" value="<?php echo $row['coursename'];?>">
                                    </div>
                                </div>
                          
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Professor Name  </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="professor", value="<?php echo $row['professor'];?>">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Video URL </label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="url" value="<?php echo $row['url'];?>">
                                        <input type="hidden" class="form-control" name="division" value="army" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Select Image </label>
                                    <div class="col-md-7">
                                        <input type="file" class="form-control" accept='.jpeg,.gif' name="file" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Course Description  </label>
                                    <div class="col-md-7">
                                        <textarea rows="4" class="form-control no-resize"  name="description"><?php echo $row['description'];?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary" value="<?php echo $id?>"name="submit">Update</button>
                                        
                                    </div>
                                </div>
                            </form>
								<?php }?>	
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

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>
