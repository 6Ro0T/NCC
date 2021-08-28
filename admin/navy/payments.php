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
<link rel="stylesheet" href="../../assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" href="../../assets/plugins/datatable/dataTables.bootstrap4.min.css">

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

    <!-- Start Quick menu with more function -->
    
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
						<li><a href="navy.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
                        <li class="active"><a href="student.php"><i class="fa fa-graduation-cap"></></i><span>Students</span></a></li>
                        <li><a href="add_course.php"><i class="fa fa-book"></i><span>Add Courses</span></a></li>
                        <li><a href="addstudent.php"><i class="fa fa-users"></i><span>Add Student</span></a></li>
                        <li><a href="attendance.php"><i class="fa fa-calendar-check-o"></i><span>Attendance</span></a></li>
						<li><a href="holiday.php"><i class="fa fa-bullhorn"></i><span>Events</span></a></li>
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
                        <h1 class="page-title">Fees</h1>
                        <ol class="breadcrumb page-breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Ericsson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Fees</li>
                        </ol>
                    </div>
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Fees-all">List</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-4">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane active" id="Fees-all">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover text-nowrap js-basic-example dataTable table-striped table_custom border-style spacing5">
                                        <thead>
                                            <tr>
                                                <th>Roll No.</th>
                                                <th>Student Name</th>
                                                <th>Fees Type</th>
                                                <th>Date</th>
                                                <th>Invoice No.</th>
                                                <th>Payment Type</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>111</td>
                                                <td>Corrine Johnson</td>
                                                <td>Annual</td>
                                                <td>12 Jan 2018</td>
                                                <td>IN-4578</td>
                                                <td>cash</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>248$</td>
                                            </tr>
                                            <tr>
                                                <td>112</td>
                                                <td>Gladys Smith</td>
                                                <td>Tuition</td>
                                                <td>12 Feb 2018</td>
                                                <td>IN-3695</td>
                                                <td>cheque</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>124$</td>
                                            </tr>
                                            <tr>
                                                <td>113</td>
                                                <td>Alice Smith</td>
                                                <td>Annual</td>
                                                <td>24 Feb 2018</td>
                                                <td>IN-4679</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-red">unpaid</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>114</td>
                                                <td>Gladys Smith</td>
                                                <td>Tuition</td>
                                                <td>25 Feb 2018</td>
                                                <td>IN-2839</td>
                                                <td>cashn</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>112$</td>
                                            </tr>
                                            <tr>
                                                <td>115</td>
                                                <td>Corrine Johnson</td>
                                                <td>Transport</td>
                                                <td>12 March 2018</td>
                                                <td>IN-4916</td>
                                                <td>cheque</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>116</td>
                                                <td>Gladys Smith</td>
                                                <td>Tuition</td>
                                                <td>12 May 2018</td>
                                                <td>IN-7542</td>
                                                <td>cashn</td>
                                                <td><span class="tag tag-red">unpaid</span></td>
                                                <td>421$</td>
                                            </tr>
                                            <tr>
                                                <td>117</td>
                                                <td>Alice Smith</td>
                                                <td>Transport</td>
                                                <td>12 May 2018</td>
                                                <td>IN-8653</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>124$</td>
                                            </tr>
                                            <tr>
                                                <td>118</td>
                                                <td>Gladys Smith</td>
                                                <td>Library</td>
                                                <td>12 May 2018</td>
                                                <td>IN-4859</td>
                                                <td>cheque</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>485$</td>
                                            </tr>
                                            <tr>
                                                <td>119</td>
                                                <td>Alice Smith</td>
                                                <td>Annual</td>
                                                <td>12 Jun 2018</td>
                                                <td>IN-2648</td>
                                                <td>cheque</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>231$</td>
                                            </tr>
                                            <tr>
                                                <td>120</td>
                                                <td>Corrine Johnson</td>
                                                <td>Tuition</td>
                                                <td>21 Jun 2018</td>
                                                <td>IN-4875</td>
                                                <td>cashn</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>4856$</td>
                                            </tr>
                                            <tr>
                                                <td>121</td>
                                                <td>Gladys Smith</td>
                                                <td>Transport</td>
                                                <td>28 Jun 2018</td>
                                                <td>IN-7946</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-red">unpaid</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>122</td>
                                                <td>Ken Smith</td>
                                                <td>Annual</td>
                                                <td>12 Jun 2018</td>
                                                <td>IN-9135</td>
                                                <td>cheque</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>123</td>
                                                <td>Corrine Johnson</td>
                                                <td>Annual</td>
                                                <td>22 Jun 2018</td>
                                                <td>IN-5284</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>124</td>
                                                <td>Ken Smith</td>
                                                <td>Transport</td>
                                                <td>18 Aug 2018</td>
                                                <td>IN-4613</td>
                                                <td>cashn</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>254$</td>
                                            </tr>
                                            <tr>
                                                <td>125</td>
                                                <td>Emmett Johnson</td>
                                                <td>Annual</td>
                                                <td>13 Aug 2018</td>
                                                <td>IN-1826</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-red">unpaid</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>126</td>
                                                <td>Ken Smith</td>
                                                <td>Library</td>
                                                <td>17 Aug 2018</td>
                                                <td>IN-76149</td>
                                                <td>cashn</td>
                                                <td><span class="tag tag-green">paid</span></td>
                                                <td>340$</td>
                                            </tr>
                                            <tr>
                                                <td>127</td>
                                                <td>Emmett Johnson</td>
                                                <td>Annual</td>
                                                <td>4 Sept 2018</td>
                                                <td>IN-3794</td>
                                                <td>credit card</td>
                                                <td><span class="tag tag-orange">pending</span></td>
                                                <td>548$</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Fees-Receipt">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">#AB0017</h3>
                                <div class="card-options">
                                    <button type="button" class="btn btn-primary"><i class="si si-printer"></i> Print Invoice</button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row my-8">
                                    <div class="col-6">
                                        <p class="h3">Company</p>
                                        <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ltd@example.com
                                        </address>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="h3">Client</p>
                                        <address>
                                        Street Address<br>
                                        State, City<br>
                                        Region, Postal Code<br>
                                        ctr@example.com
                                        </address>
                                    </div>
                                </div>
                                <div class="table-responsive push">
                                    <table class="table table-bordered table-hover text-nowrap">
                                        <tbody><tr>
                                            <th class="text-center width35"></th>
                                            <th>Product</th>
                                            <th class="text-center" style="width: 1%">Qnt</th>
                                            <th class="text-right" style="width: 1%">Unit</th>
                                            <th class="text-right" style="width: 1%">Amount</th>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td>
                                                <p class="font600 mb-1">Logo Creation</p>
                                                <div class="text-muted">Logo and business cards design</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$1.800,00</td>
                                            <td class="text-right">$1.800,00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">2</td>
                                            <td>
                                                <p class="font600 mb-1">Online Store Design &amp; Development</p>
                                                <div class="text-muted">Design/Development for all popular modern browsers</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$20.000,00</td>
                                            <td class="text-right">$20.000,00</td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>
                                                <p class="font600 mb-1">App Design</p>
                                                <div class="text-muted">Promotional mobile application</div>
                                            </td>
                                            <td class="text-center">1</td>
                                            <td class="text-right">$3.200,00</td>
                                            <td class="text-right">$3.200,00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="font600 text-right">Subtotal</td>
                                            <td class="text-right">$25.000,00</td>
                                        </tr>
                                        <tr class="bg-light">
                                            <td colspan="4" class="font600 text-right">Vat Rate</td>
                                            <td class="text-right">20%</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="font600 text-right">Vat Due</td>
                                            <td class="text-right">$5.000,00</td>
                                        </tr>
                                        <tr class="bg-green text-light">
                                            <td colspan="4" class="font700 text-right">Total Due</td>
                                            <td class="font700 text-right">$30.000,00</td>
                                        </tr>
                                    </tbody></table>
                                </div>
                                <p class="text-muted text-center">Thank you very much for doing business with us. We look forward to working with you again!</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Fees-add">
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
                                    <label class="col-md-3 col-form-label">Roll No <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Student Name <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Department/Class  <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control" name="select">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Mathematics</option>
                                            <option value="Category 2">Engineering</option>
                                            <option value="Category 3">Science</option>
                                            <option value="Category 3">M.B.A.</option>
                                            <option value="Category 3">Music</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Fees Type  <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control" name="selectType">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Annual</option>
                                            <option value="Category 2">Tuition</option>
                                            <option value="Category 3">Transport</option>
                                            <option value="Category 3">Exam</option>
                                            <option value="Category 3">Library</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Duration <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="example-inline-radios" value="option1" checked="">
                                                <span class="custom-control-label">Monthly</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="example-inline-radios" value="option2">
                                                <span class="custom-control-label">Session</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" class="custom-control-input" name="example-inline-radios" value="option3">
                                                <span class="custom-control-label">Yearly</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Collection Date <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Amount <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Method <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control" name="select">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Cash</option>
                                            <option value="Category 2">Cheque</option>
                                            <option value="Category 3">Credit Card</option>
                                            <option value="Category 4">Debit Card</option>
                                            <option value="Category 5">Netbanking</option>
                                            <option value="Category 6">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Status <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control" name="select">
                                            <option value="">Select...</option>
                                            <option value="Category 1">Paid</option>
                                            <option value="Category 2">Unpaid</option>
                                            <option value="Category 3">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Reference No. <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Payment Details <span class="text-danger">*</span></label>
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
<script src="../../assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../assets/bundles/dataTables.bundle.js"></script>

<!-- Start project main js  and page js -->
<script src="../../assets/js/core.js"></script>
<script src="assets/js/table/datatable.js"></script>
</body>
</html>
