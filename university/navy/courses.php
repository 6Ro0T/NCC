<?php
   include('session.php');
?>
<!doctype html>
<html lang="en" dir="ltr">
<head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>MyNCC : Courses</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
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
                <a class="header-brand" href="navy.php"><i class="fa fa-graduation-cap brand-logo"></i></a>
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
                        <li><a href="navy.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="viewat.php"><i class="fa fa-black-tie"></i><span>View Attendance</span></a></li>
						<li><a href="staff.php"><i class="fa fa-users"></i><span>Staff</span></a></li>
                        <li class="active"><a href="courses.php"><i class="fa fa-graduation-cap"></i><span>Classes</span></a></li>                        
                        <li><a href="library.php"><i class="fa fa-book"></i><span>Study Materials</span></a></li>
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
                        <h1 class="page-title">Classes</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
							<li class="breadcrumb-item">Cadets</li>
                            <li class="breadcrumb-item active" aria-current="page">Classes</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Courses-all">Classes</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Courses-all">
                    
                        <div class="row row-deck">
                                <?php
                                    include('conn.php');
                                    $flag=0;
                                    $sql="select * from course where division='navy'";
                                    $result=mysqli_query($conn,$sql);
                                    $check=mysqli_num_rows($result);
                                    if($check)
                                        $flag=0;
                                    while($row=mysqli_fetch_array($result))
                                    {
                                ?>
                               
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="card">
                                
                                    <?php 
                                    $id=$row['url'];
                                    $text="<iframe name='myframe'width='320' height='200' src='https://www.youtube.com/embed/$id' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                                    
                                    $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=statistics&id=$id&key=AIzaSyCUzBxx5oXGt57tKJTnnwZWAXPj-rz7H3A");

                                    $duration = json_decode($dur, true);
                                    foreach ($duration['items'] as $vidTime) {
                                        $views=$vidTime['statistics']['viewCount'];
        
                                    }
                                    ?>
                                    <a href="https://www.youtube.com/watch?v=<?php echo$row['url'];?>" target="_blank"><img src="../../images/<?php echo $row['filename'];?>" ></a>
                                    <div class="card-body d-flex flex-column">
                                        <h5><?php echo $row['coursename'];?></h5>
                                        <div class="text-muted"><?php echo $row['description'];?></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-vcenter mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="w20"><i class="fa fa-calendar text-blue"></i></td>
                                                    <td class="tx-medium">Duration</td>
                                                    <td class="text-right"><?php echo $row['duration'];?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-user-circle-o"></i></td>
                                                    <td class="tx-medium">Professor</td>
                                                    <td class="text-right"><?php echo $row['professor']?></td>
                                                </tr>
                                                <tr>
                                                    <td><i class="fa fa-eye"></i></td>
                                                    <td class="tx-medium">Views</td>
                                                    <td class="text-right"><?php echo $views;?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                </div>
                            </div>
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
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->
<script src="../../assets/plugins/sweetalert/sweetalert.min.js"></script>
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/page/dialogs.js"></script>
</body>
</html>
