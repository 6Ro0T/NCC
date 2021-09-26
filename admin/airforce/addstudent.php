<?php
   include('session.php');
   include('conn.php');
   $flag=0;
   $count=0;
   if(isset($_POST['submit']))
   {
       if($_POST['email']){
            $password=hash('sha256', $_POST['password']);
            $sql = "SELECT email FROM student WHERE email='$_POST[email]'";
            $check = mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($check);
            $count = mysqli_num_rows($check);
            if($count==0){
                $sql="INSERT INTO `student`( `roll_number`, `name`, `Cadet_rank`, `year`, `dob`, `phone`, `email`, `password`, `division`, `role`) VALUES ('$_POST[roll_num]','$_POST[name]','$_POST[rank]','$_POST[year]','$_POST[dob]','$_POST[phone]','$_POST[email]','$password','$_POST[division]','$_POST[role]')";
                $result=mysqli_query($conn,$sql);
       
                if($result)
                    $flag=1;
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
                        <li><a href="student.php"><i class="fa fa-graduation-cap"></i><span>Students</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li class="active"><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
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
                        <h1 class="page-title">Add Student</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Studdent</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">Add Student</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    
                    <div class="tab-pane active" id="Hostel-add">
                        <div class="card">
                        <?php if($flag) {?>
                        <div class="alert alert-success">
                        <Strong>Successfully Added Student</strong>
                        </div>
                        <?php } ?>
                        <?php if($count==1){?>
                        <div class="alert alert-danger">
                        <Strong>Student Exist</strong>
                        </div>
                        <?php } ?>
                            <form class="card-body" method="post" action="addstudent.php">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Cadet Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name='name' placeholder='Name' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Regimental Number. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="phone" class="form-control" name='roll_num'  placeholder='Reg No' maxlength="5" class="phone1" required>
                                        <script type="text/javascript">
                                        $('.phone1').keypress(function(e) {
                                        var arr = [];
                                        var kk = e.which;
                                        for (i = 48; i < 58; i++)
                                        arr.push(i);
                                        if (!(arr.indexOf(kk)>=0))
                                        e.preventDefault();
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Cadet Rank.<span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name='rank' placeholder='Rank' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Year. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" name='year' min='1' max='4' placeholder='year' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Date of Birth. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="date" class="form-control" name='dob' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Phone Number. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="phone" class="form-control" name='phone'  placeholder='<10 Digit number>' maxlength="10" class="phone" required>
                                        <script type="text/javascript">
                                        $('.phone').keypress(function(e) {
                                        var arr = [];
                                        var kk = e.which;
                                        for (i = 48; i < 58; i++)
                                        arr.push(i);
                                        if (!(arr.indexOf(kk)>=0))
                                        e.preventDefault();
                                        });
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">E-mail <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" name='email' required placeholder ="abc@ncc.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Password <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name='password' required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    
                                    <div class="col-md-7">
                                        <input type="hidden" class="form-control" name='role' value='student' required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-md-7">
                                        <input type="hidden" class="form-control" name='division'value='airforce' required>
                                    </div>
                                </div>
                                  <div class="form-group row">
                                  <label class="col-md-3 col-form-label"></label>
                                  <div class="col-md-7">
                                 <button align="center"type="submit"name='submit' class="btn btn-primary">Submit</button>
                                
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
