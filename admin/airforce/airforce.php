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
<title>MyNCC : Admin</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Plugins css -->
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
    <!-- Start Rightbar setting panel -->
    <!-- Start Quick menu with more functio -->
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
						<li class="active"><a href="airforce.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="student.php"><i class="fa fa-graduation-cap"></></i><span>Students</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
                        <li><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
                        <li><a href="quiz.php"><i class="fa fa-quora"></i><span>Add Quiz</span></a></li>
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
                <div class="d-flex justify-content-between align-items-center">
                    <div class="header-action">
                        <h1 class="page-title">Dashboard</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">MyNCC</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>
					<ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#admin-Dashboard">Dashboard</a></li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="row clearfix row-deck">
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="student.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-graduation-cap"></i>
                                    <span>Students</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="add_course.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-book"></i>
                                    <span>Add Courses</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body ribbon">
                                <a href="addstudent.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-users"></i>
                                    <span>Add Students</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="attendance.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-calendar-check-o"></i>
                                    <span>Attendance</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-xl-2">
                        <div class="card">
                            <div class="card-body">
                                <a href="events.php" class="my_sort_cut text-muted">
                                    <i class="fa fa-bullhorn"></i>
                                    <span>Events</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
			<div class="tab-content">
            <div class="tab-pane fade show active" id="admin-Dashboard" role="tabpanel">
                <div class="row clearfix"> 
                    <div class="row clearfix row-deck">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
      
                                    <div class="card-header">
                                        <h3 class="card-title">Best Performers of the Week</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive style=height: 310px;">
                                            <table class="table table-striped mb-0 text-nowrap table-striped mb-0">
                                                <thead>
                                                    <tr>
                    
                                                        <th>Reg No</th>
                                                        <th>Name</th>
                
                                                    </tr>
                                                </thead>
                                                <tbody>
														<tr>
															<td>30283</td>
															<td>Varsha M</td>
														</tr>
														<tr>
															<td>30293</td>
															<td>Preethi H</td>
														</tr>
														<tr>
															<td>30204</td>
															<td>Harish H</td>
														</tr>
														<tr>
															<td>30283</td>
															<td>Ranjitha G</td>
														</tr>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <div class="card">
      
                                    <div class="card-header">
                                        <h3 class="card-title">Student List</h3>
                                        <div class="card-options">
                                            <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                            <a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
                                            <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-striped mb-0 text-nowrap">
                                                <thead>
                                                    <tr>
                    
                                                        <th>Reg No</th>
                                                        <th>Cadet Name</th>
														<th>Cadet Rank</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php 
                                                    include('conn.php');
                                                    $a=1;
                                                    $sql="SELECT * FROM student where division='airforce'";
                                                    $stmt=mysqli_query($conn,$sql);
                                                    
                                                    while($row=mysqli_fetch_array($stmt)){
                                                        echo "<tr>";
                                                            echo "<td>".$row['roll_number']."</td>";
                                                            echo "<td>".$row['name']."</td>";
                                                            echo "<td>".$row['Cadet_rank']."</td>";
															
                                                        echo "</tr>";
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
            </div>       
        
			<div class="card">
                <div class="table-responsive">
                            <table class="table table-hover table-vcenter mb-0 table_custom spacing8 text-nowrap">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>FACTS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <h6 class="mb-0">THE KARGIL WAR</h6>
                                            <span>The Kargil War, also known as the Kargil conflict, was an armed conflict fought between India and Pakistan from May to July 1999 in the Kargil district of <br>
											Jammu and Kashmir and elsewhere along the Line of Control (LoC).The Kargil conflict of 1999 represents the most recent serious military exchange between two nuclear <br>
											armed countries.In India, the conflict is also referred to as Operation Vijay.Which was the name of the Indian military operation to clear out the Kargil sector. <br>
											The Indian Air Force's role in acting jointly with Indian Army ground troops during the war was aimed at flushing out regular and irregular troops of the Pakistan Army <br>
											from vacated Indian positions along the LoC. This particular operation was given the codename Operation Safed Sagar.</span>
                                        </td>
                   
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <h6 class="mb-0">THE INDIAN LINE OF CONTROL</h6>
                                            <span>The Line of Control (LoC) is a military control line between the Indian and Pakistani controlled parts of the former princely state of Jammu and Kashmir —<br>
											a line which does not  constitute a legally recognized international boundary, but serves as the de facto border. It was established as part of the Simla Agreement <br>
											at the end of the Indo-Pakistani War of 1971, when the two nations agreed to rename the ceasefire line as "Line of Control" and pledged to respect it without prejudice <br>
											to their respective positions.The line is roughly the same as the original cease-fire line of 1949 except for minor details. The part of the former princely state that is<br>
											underIndian control is divided into the union territories of Jammu and Kashmir and Ladakh, while the Pakistani-controlled part is divided into Azad Kashmir and Gilgit– <br> Baltistan.</span>
                                        </td>
      
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <h6 class="mb-0">STRIKES (SURGICAL STRIKE)</h6>
                                            <span>On 29 September, 11 days after the Uri attack, the Indian Army conducted surgical strikes against suspected militants in Pakistani-administered Kashmir.  <br>
											Lt Gen Ranbir Singh, Indian Director General of Military Operations (DGMO), said that it had received "very credible and specific information" about "terrorist teams''<br>
											who were preparing to "carry out infiltration and conduct terrorist strikes inside Jammu and Kashmir and in various metros in other states". Columnist Ankit Panda  <br> 
											thought the latter included Pakistani soldiers or the elements of Pakistani state.On 30 September, Indian minister for information and broadcasting Rajyavardhan Singh  <br>
											Rathore said that there had been no aerial strikes and that the operation had been conducted "on the ground".</span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <h6 class="mb-0">SIACHEN CONFLICT(1984-2003)</h6>
                                            <span>The Siachen conflict, sometimes referred to as the Siachen War, was a military conflict between India and Pakistan over the disputed Siachen Glacierregion in Kashmir. <br>
											A cease-fire went into effect in 2003.The contended area is nearly 1,000 square miles(2,600 km 2 ) of territory.The conflict was started in 1984 by India's successful capture <br>
											of the Siachen Glacier as part of Operation Meghdoot, and subsequently continued with Operation Rajiv. India took control of the 70-kilometre-long (43 mi) Siachen Glacier <br> 
											and its tributary glaciers, as well as all the main passes and heights of the Saltoro Ridge immediately west of the glacier, including Sia La, Bilafond La, and Gyong La. <br>
											Pakistan controls the glacial valleys immediately west of the Saltoro Ridge.According to TIME magazine,India gained control of more than 2500 km 2 of territory because <br>
											of its military operations in Siachen.</span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <h6 class="mb-0">INDIA – PAKISTAN STANDOFF 2008 (MUMBAI ATTACK)</h6>
                                            <span>After the 2008 Mumbai attacks,Pakistan and the ISI were believed by India to be directly responsible for the attacks, leading to strained relations between the two <br>
											countries for a period of time. The standoff was significant because both the countries were nuclear nations, having first successfully tested nuclear weapons in 1974 <br> 
											and 1998 respectively. The countries had already participated in 4 wars since their partition and independence in 1947, and relations between the two nations have <br>
											been strained throughout their histories. The lone surviving terrorist of the Mumbai attacks confirmed that the terrorists came from Pakistan, and that they were <br>
											trained by Lashkar-e-Taiba operatives. In 2011, he also confessed that the ISI had been supporting them throughout the attacks. </span>
                                        </td>
                                        
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <h6 class="mb-0">CONFLICTS BETWEEN INDIA AND CHINA</h6>
                                            <span>The Sino-Indian War between China and India occurred in October–November 1962. A disputed Himalayan border was the main cause of the war. There had been a series <br>
											of violent border skirmishes between the two countries after the 1959 Tibetan uprising, when India granted asylum to the Dalai Lama.India initiated a defensive Forward <br>
											Policy from 1960 to hinder Chinese military patrols and logistics, in which it placed outposts along the border, including several north of the McMahon Line, the eastern <br>
											portion of the Line of Actual Control proclaimed by Chinese Premier Zhou Enlai in 1959.</span>
                                        </td>
                                        
                                    </tr>
									<tr>
                                        <td>07</td>
                                        <td>
                                            <h6 class="mb-0">CONFLICTS BETWEEN INDIA PAKISTAN</h6>
                                            <span>The 1965 war between India and Pakistan was the second conflict between the two countries over the status of the state of Jammu and Kashmir. The clash did not resolve <br>
											this dispute, but it did engage the United States and the Soviet Union in ways that would have important implications for subsequent superpower involvement in the region.<br>
											Conflict resumed again in early 1965, when Pakistani and Indian forces clashed over disputed territory along the border between the two nations. Hostilities intensified that <br>
											August when the Pakistani Army attempted to take Kashmir by force. The attempt to seize the state was unsuccessful, and the second India-Pakistan War reached a <br>
											stalemate. This time, the international politics of the Cold War affected the nature of the conflict.</span>
                                        </td>
                                        
                                    </tr>
                                </tbody>
                            </table>
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

<!-- Start all plugin js -->
<script src="../../assets/bundles/counterup.bundle.js"></script>
<script src="../../assets/bundles/apexcharts.bundle.js"></script>
<script src="../../assets/bundles/summernote.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/page/index.js"></script>
<script src="assets/js/page/summernote.js"></script>
</body>
</html>
