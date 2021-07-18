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
    <div class="user_div">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#righttab-statistics">Statistics</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Result">Result</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Students">Student</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#righttab-Todo">Todo</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="righttab-statistics" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <div>Total Revenue</div>
                        <div class="py-3 m-0 text-center h1 text-success">$79,452</div>
                        <div class="d-flex">
                            <span class="text-muted">Income</span>
                            <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>4%</div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>$43,320</strong></div>
                                    <div class="float-right"><small class="text-muted">Bank of America</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>$36,132</strong></div>
                                    <div class="float-right"><small class="text-muted">Wells Fargo</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-yellow"><i class="fa fa-users"></i> </div>
                        <div class="content">
                            <span>Total Student</span>
                            <h5 class="number mb-0">2,051</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-gray"><i class="fa fa-sitemap"></i> </div>
                        <div class="content">
                            <span>Department</span>
                            <h5 class="number mb-0">14</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-dark"><i class="fa fa-black-tie"></i> </div>
                        <div class="content">
                            <span>Total Teacher</span>
                            <h5 class="number mb-0">27</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-azure"><i class="fa fa-tags"></i> </div>
                        <div class="content">
                            <span>Total Courses</span>
                            <h5 class="number mb-0">31</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-pink"><i class="fa fa-credit-card"></i> </div>
                        <div class="content">
                            <span>Expense</span>
                            <h5 class="number mb-0">$7,254</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-green"><i class="fa fa-bank"></i> </div>
                        <div class="content">
                            <span>Total Income</span>
                            <h5 class="number mb-0">$27,852</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-cyan"><i class="fa fa-map-o"></i> </div>
                        <div class="content">
                            <span>Our Center</span>
                            <h5 class="number mb-0">52</h5>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body top_counter">
                        <div class="icon bg-indigo"><i class="fa fa-smile-o"></i> </div>
                        <div class="content">
                            <span>Smiley Face</span>
                            <h5 class="number mb-0">10K</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Result" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Result 2019</h3>
                        <div class="card-options">
                            <a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>87%</strong></div>
                                    <div class="float-right"><small class="text-muted">Art & Design</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>80%</strong></div>
                                    <div class="float-right"><small class="text-muted">Fashion</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>63%</strong></div>
                                    <div class="float-right"><small class="text-muted">Sports Science</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>91%</strong></div>
                                    <div class="float-right"><small class="text-muted">Computers</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Biological Sciences</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <label class="mb-0">Total Pass</label>
                                <div class="font-20 font-weight-bold">1,052</div>
                            </div>
                            <div class="col-6">
                                <label class="mb-0">Total Fail</label>
                                <div class="font-20 font-weight-bold">198</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Result 2018</h3>
                        <div class="card-options">
                            <a href="#"><i class="fa fa-file-excel-o" data-toggle="tooltip" title="Export Excel"></i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>80%</strong></div>
                                    <div class="float-right"><small class="text-muted">Fashion</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>87%</strong></div>
                                    <div class="float-right"><small class="text-muted">Art & Design</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azure" role="progressbar" style="width: 87%" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>91%</strong></div>
                                    <div class="float-right"><small class="text-muted">Computers</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-indigo" role="progressbar" style="width: 91%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="clearfix">
                                    <div class="float-left"><strong>35%</strong></div>
                                    <div class="float-right"><small class="text-muted">Biological Sciences</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-pink" role="progressbar" style="width: 35%" aria-valuenow="6" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li>
                                <div class="clearfix">
                                    <div class="float-left"><strong>63%</strong></div>
                                    <div class="float-right"><small class="text-muted">Sports Science</small></div>
                                </div>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 63%" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="row text-center">
                            <div class="col-6 border-right">
                                <label class="mb-0">Total Pass</label>
                                <div class="font-20 font-weight-bold">845</div>
                            </div>
                            <div class="col-6">
                                <label class="mb-0">Total Fail</label>
                                <div class="font-20 font-weight-bold">142</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Students" role="tabpanel">
                <div id="users">
                    <div class="input-group mt-2 mb-2">
                        <input type="text" class="form-control search" placeholder="Search Student">
                    </div>
                    <ul class="right_chat list-unstyled list">
                        <li class="alfabet">A</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Abigail Churchill</span>
                                    <span class="message">Art & Design</span>
                                </div>
                            </a>                            
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexandra Carr</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>                            
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alison Berry</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">B</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Bella Alan</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">C</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Caroline Alan</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar6.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Connor Campbell</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar7.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Charles Campbell</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">D</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Donna Hudson</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Dylan Jones</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">G</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar8.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gordon Hudson</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar9.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gabrielle Walker</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar10.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Gavin North</span>
                                    <span class="message">Computers</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">S</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Stephanie Hudson</span>
                                    <span class="message">Sports Science</span>
                                </div>
                            </a>
                        </li>
                        <li class="alfabet">W</li>
                        <li>
                            <a href="javascript:void(0);" class="media">
                                <img class="media-object" src="../../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">William Paige</span>
                                    <span class="message">Fashion</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="user_chatbody chat_app">
                    <div class="card-header bline pt-1 pl-0 pr-0">
                        <h3 class="card-title">Abigail Churchill <small>Online</small></h3>
                        <div class="card-options">
                            <a href="javascript:void(0)" class="p-1" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item active" href="#">Online</a>
                                <a class="dropdown-item" href="#">Away</a>
                                <a class="dropdown-item" href="#">Do not disturb</a>
                                <a class="dropdown-item" href="#">Invisible</a>
                            </div>
                            <a href="javascript:void(0)" class="p-1 chat_close"><i class="fa fa-close"></i></a>
                        </div>
                    </div>
                    <div class="chat_windows">
                        <ul class="mb-0">
                            <li class="other-message">
                                <img class="avatar mr-3" src="../../assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-blue">Are we meeting today?</p>
                                    <span class="time">10:10 AM, Today</span>
                                </div>
                            </li>    
                            <li class="other-message">
                                <img class="avatar mr-3" src="../../assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <p class="bg-light-blue">Hi Aiden, how are you? How is the project coming along?</p>
                                    <p class="bg-light-blue">Are we meeting today?</p>
                                    <span class="time">10:15 AM, Today</span>
                                </div>
                            </li>                                    
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Project has been already finished and I have results to show you.</p>
                                    <div class="file_folder">
                                        <a href="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fa fa-file-excel-o text-success"></i>
                                            </div>
                                            <div class="file-name">
                                                <p class="mb-0 text-muted">Report2019.xls</p>
                                                <small>Size: 68KB</small>
                                            </div>
                                        </a>
                                    </div>
                                    <span class="time">10:17 AM, Today</span>
                                </div>
                            </li>
                            <li class="other-message">
                                <img class="avatar mr-3" src="../../assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">
                                    <div class="media_img">
                                        <img src="../../assets/images/gallery/1.jpg" class="w100 img-thumbnail" alt="">
                                        <img src="../../assets/images/gallery/2.jpg" class="w100 img-thumbnail" alt="">
                                    </div>
                                    <span class="time">10:15 AM, Today</span>
                                </div>
                            </li> 
                            <li class="other-message">
                                <img class="avatar mr-3" src="../../assets/images/xs/avatar1.jpg" alt="avatar">
                                <div class="message">                                            
                                    <p class="bg-light-blue">Are we meeting today I have results?</p>
                                    <span class="time">10:18 AM, Today</span>
                                </div>
                            </li>
                            <li class="my-message">
                                <div class="message">
                                    <p class="bg-light-gray">Well we have good budget for the project</p>
                                    <span class="time">10:25 AM, Today</span>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-message clearfix">
                            <a href="javascript:void(0);"><i class="icon-camera"></i></a>
                            <a href="javascript:void(0);"><i class="icon-camcorder"></i></a>
                            <a href="javascript:void(0);"><i class="icon-paper-plane"></i></a>
                            <div class="input-group mb-0">
                                <input type="text" class="form-control" placeholder="Enter text here...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="righttab-Todo" role="tabpanel">
                <ul class="list-unstyled mb-0 todo_list">
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                            <span class="custom-control-label">Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">New logo design for Angular Admin</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                            <span class="custom-control-label">Design PSD files for Angular Admin</span>
                        </label>
                    </li>
                    <li>
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked="">
                            <span class="custom-control-label">New logo design for Angular Admin</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Start Main leftbar navigation -->
    <div id="left-sidebar" class="sidebar">
        <h5 class="brand-name">Ericsson<a href="javascript:void(0)" class="menu_option float-right"><i class="icon-grid font-16" data-toggle="tooltip" data-placement="left" title="Grid & List Toggle"></i></a></h5>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu-uni">University</a></li>
        </ul>
        <div class="tab-content mt-3">
            <div class="tab-pane fade show active" id="menu-uni" role="tabpanel">
                <nav class="sidebar-nav">
                    <ul class="metismenu">
                        <li><a href="index.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li><a href="professors.php"><i class="fa fa-black-tie"></i><span>Professors</span></a></li>
                        <li><a href="staff.php"><i class="fa fa-user-circle-o"></i><span>Staff</span></a></li>
                        <li><a href="departments.php"><i class="fa fa-users"></i><span>Departments</span></a></li>
                        <li><a href="courses.php"><i class="fa fa-graduation-cap"></i><span>Courses</span></a></li>                        
                        <li><a href="library.php"><i class="fa fa-book"></i><span>Library</span></a></li>
                        <li class="active"><a href="holiday.php"><i class="fa fa-bullhorn"></i><span>Holiday</span></a></li>
                        
                        <li><a href="events.php"><i class="fa fa-calendar"></i><span>Calender</span></a></li>
                    </ul>
                </nav>
            </div>
           
        </div>
    </div>
    <!-- Start project content area -->
    <div class="page">
        <!-- Start Page header -->
        <div class="section-body" id="page_top" >
            <div class="container-fluid">
                <div class="page-header">
                    <div>                        
                    </div>
                    <div class="right">
                        <div class="notification d-flex">
                            
                            
                            <div class="dropdown d-flex">
                                <a href="javascript:void(0)" class="chip ml-3" data-toggle="dropdown">
                                    <span class="avatar" style="background-image: url(../../assets/images/xs/avatar5.jpg)"></span> George</a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                    <a class="dropdown-item" href="page-profile.php"><i class="dropdown-icon fe fe-user"></i> Profile</a>
                                    <a class="dropdown-item" href="logout.php"><i class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Page title and tab -->
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center ">
                    <div class="header-action">
                        <h1 class="page-title">Holiday</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Holiday</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Holiday-Calendar">Calendar</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Holiday-all">List</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Holiday-add">Add</a></li>
                        <li class="nav-item"><a class="nav-link" id="Holiday-tab-Boot" data-toggle="tab" href="#Holiday-add-Boot">Add Bootstrap Style</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Holiday-Calendar">
                        <div class="card">
                            <div class="card-body">
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Holiday-all">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-vcenter text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Subject</th>
                                                <th>Department</th>
                                                <th>Year</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>New Year's Day</td>
                                                <td>Public Holiday</td>
                                                <td>01 January 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Memorial Day</td>
                                                <td>Public Holiday</td>
                                                <td>29 May 2019</td>
                                                <td>29 May 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Christmas Day</td>
                                                <td>Public Holiday</td>
                                                <td>25 December 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Annual Function</td>
                                                <td>Holiday By Collage</td>
                                                <td>01 March 2019</td>
                                                <td>03 March 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>New Year's Day</td>
                                                <td>Public Holiday</td>
                                                <td>01 January 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Memorial Day</td>
                                                <td>Public Holiday</td>
                                                <td>29 May 2019</td>
                                                <td>29 May 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Christmas Day</td>
                                                <td>Public Holiday</td>
                                                <td>25 December 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Annual Function</td>
                                                <td>Holiday By Collage</td>
                                                <td>01 March 2019</td>
                                                <td>03 March 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>New Year's Day</td>
                                                <td>Public Holiday</td>
                                                <td>01 January 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Memorial Day</td>
                                                <td>Public Holiday</td>
                                                <td>29 May 2019</td>
                                                <td>29 May 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Christmas Day</td>
                                                <td>Public Holiday</td>
                                                <td>25 December 2019</td>
                                                <td>03 January 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Annual Function</td>
                                                <td>Holiday By Collage</td>
                                                <td>01 March 2019</td>
                                                <td>03 March 2019</td>
                                                <td>
                                                    <button type="button" class="btn btn-icon btn-sm" title="View"><i class="fa fa-eye"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm" title="Edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-icon btn-sm js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Holiday-add">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Holiday</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Enter Title" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Holiday Type" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Holiday Start Date">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Holiday End Date">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-primary btn-lg btn-simple">Add Holiday</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Holiday-add-Boot">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Library</h3>
                                <div class="card-options ">
                                    <a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                                    <a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
                                </div>
                            </div>
                            <form class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Title <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Holiday Type  <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control input-height" name="type">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Public Holiday</option>
                                            <option value="Category 2">Holiday By University</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Holiday Start Date <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Holiday End Date <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Holiday Details <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
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
        </div>
    </div>    
</div>

<!-- Add New Event popup -->
<div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> an event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Event Name</label>
                            <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Event Color</label>
                            <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Direct Event popup -->
<div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Direct Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Event Edit Modal popup -->
<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn mr-auto delete-btn btn-danger">Delete</button>
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


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
