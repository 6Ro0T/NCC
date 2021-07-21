<?php
   include('session.php');
   include('conn.php');
   $flag=0;
   $dat=0;
   $count=0;
   date_default_timezone_set('Asia/Kolkata');
   $date=date("Y-m-d");
   if(isset($_POST['update']))
   {
        
                
             
            foreach($_POST['status'] as $id=>$attendance)
            {
                $stname=$_POST['sname'][$id];
                $rollnumber=$_POST['roll_num'][$id];
                
                    $sql1="UPDATE `attendance` SET `name`='$stname',`roll_number`='$rollnumber',`status`='$attendance' ,`date`='$date' WHERE date='$date' and name='$stname'";
					
                    $result=mysqli_query($conn,$sql1);
                    if($result)
                        $flag=1;
                
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
                <a href="login.html" class="nav-link icon settingbar"><i class="fe fe-power"></i></a>                
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
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane vivify fadeIn active" id="Settings" aria-expanded="true">
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Theme Color</h6>
                    <ul class="choose-skin list-unstyled mb-0">
                        <li data-theme="azure"><div class="azure"></div></li>
                        <li data-theme="indigo"><div class="indigo"></div></li>
                        <li data-theme="purple"><div class="purple"></div></li>
                        <li data-theme="orange"><div class="orange"></div></li>
                        <li data-theme="green"><div class="green"></div></li>
                        <li data-theme="cyan" class="active"><div class="cyan"></div></li>
                        <li data-theme="blush"><div class="blush"></div></li>
                        <li data-theme="white"><div class="bg-white"></div></li>
                    </ul>
                </div>
                <div class="mb-4">
                    <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                    <div class="custom-controls-stacked font_setting">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-muli" checked="">
                            <span class="custom-control-label">Muli Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-montserrat">
                            <span class="custom-control-label">Montserrat Google Font</span>
                        </label>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" name="font" value="font-poppins">
                            <span class="custom-control-label">Poppins Google Font</span>
                        </label>
                    </div>
                </div>
                <div>
                    <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                    <ul class="setting-list list-unstyled mt-1 setting_switch">
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Night Mode</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-darkmode">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Fix Navbar top</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-fixnavbar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Header Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-pageheader">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Min Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-min_sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Sidebar Dark</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-sidebar">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Icon Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-iconcolor">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Gradient Color</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-gradient" checked="">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Shadow</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxshadow">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">RTL Support</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-rtl">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                        <li>
                            <label class="custom-switch">
                                <span class="custom-switch-description">Box Layout</span>
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input btn-boxlayout">
                                <span class="custom-switch-indicator"></span>
                            </label>
                        </li>
                    </ul>
                </div>
                <hr>
                <div class="form-group">
                    <label class="d-block">Storage <span class="float-right">77%</span></label>
                    <div class="progress progress-sm">
                        <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                    </div>
                    <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane vivify fadeIn" id="activity" aria-expanded="false">
                <ul class="new_timeline mt-3">
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:00am</div>
                        <div class="desc">
                            <h3>Attendance</h3>
                            <h4>Computer Class</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet pink"></div>
                        <div class="time">11:30am</div>
                        <div class="desc">
                            <h3>Added an interest</h3>
                            <h4>“Volunteer Activities”</h4>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">12:00pm</div>
                        <div class="desc">
                            <h3>Developer Team</h3>
                            <h4>Hangouts</h4>
                            <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                <li><img src="../../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                <li><img src="../../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="../../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="../../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                            
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:00pm</div>
                        <div class="desc">
                            <h3>Responded to need</h3>
                            <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                        </div>
                    </li>
                    <li>
                        <div class="bullet orange"></div>
                        <div class="time">1:30pm</div>
                        <div class="desc">
                            <h3>Lunch Break</h3>
                        </div>
                    </li>
                    <li>
                        <div class="bullet green"></div>
                        <div class="time">2:38pm</div>
                        <div class="desc">
                            <h3>Finish</h3>
                            <h4>Go to Home</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
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
                        
               
               <div class="text-md-center">
                  </strong>Today: <?php echo date("Y-m-d");?></strong>
                </div>
            </div>
           
        </div>
        
        <div class="section-body mt-4">
			<?php if($flag) {?>
             <div class="alert alert-success">
             <Strong>Attendance Updated Successfully</strong>
             </div>
			<?php } ?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
					<h5>Date:<?php echo $date;?></h5> 
                        <div class="card">
                            
                            <div class="table-responsive"> 
							  
							</div>
                        
								<form method="POST" action="view_by_date.php">
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
										
                                        $sql="select * from attendance where date='$date'";
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
				<a href="view_at.php"><button type="" class="btn btn-primary "  >BACK</button></a>
				</div>
            </div>
			
        </div>
       
       
        <!-- Start main footer -->
        
    </div>    
</div>

<!-- Start Main project js, jQuery, Bootstrap -->
<script src="../../assets/bundles/lib.vendor.bundle.js"></script>

<!-- Start Plugin Js -->

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
</body>
</html>
