<?php 
require_once('classes/autoloader.php');
$operation = new ApplicantController();
$operation2 = new ApplicantView();
$operation2->applicant_controll_access();
$operation->updateAppLoginInfo();
$data = $operation2->viewApplicantInfo($_SESSION['AppID']);
$row = mysqli_fetch_assoc($data);

// if (isset($_POST['session'])) {
//   # code...
//   $_SESSION["AppID"] = "219284930263";
//   header("location: index.php");
// }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>

<!--   nav bar-->

    <div id="wrapper"  class="side-bg">
        <nav class="navbar navbar-default top-navbar" role="navigation"  style="background-color: #55917F; color: white">
            <div class="navbar-header"  style="background-color: #55917F; color: white">
                <button type="button" class="navbar-toggle waves-effect waves-dark" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand waves-effect waves-dark" href="#" style="background-color: #55917F; font-size: 20px;">  <strong><img src="./assets/img/kadpoly.jpg" height="40" width="50"> Kadpoly ODFeL</strong></a>
        
    <div id="sideNav" href=""  style="background-color: #55917F; color: white"><i class="material-icons dp48">toc</i></div>
            </div>

            <ul class="nav navbar-top-links navbar-right"  style="background-color: #55917F;"> 
        
          <li><a class="dropdown-button waves-effect waves-dark text-light" href="#!" data-activates="dropdown1" style="color: white"><i class="fa fa-user fa-fw" style="color: white"></i> <b><?php echo  $_SESSION['appFullName']; ?></b> <i class="material-icons right" style="color: white">arrow_drop_down</i></a></li>
            </ul>
        </nav>
    <!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li class="disabled"><a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
</li>
<li class="disabled"><a href="#"><i class="fa fa-gear fa-fw"></i> Change Password</a>
</li> 
<li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
</li>
</ul>

	   <!--/. NAV TOP  -->

       <nav class="navbar-default navbar-side" role="navigation"   style="background-color: #EDF2EF">
            <div class="sidebar-collapse"   style="background-color: #EDF2EF;">
                <ul class="nav  text-green" id="main-menu">

                    <li class="disabled">
                        <a class=" waves-effect waves-dark text-green" href="#"><i class="fa fa-dashboard  text-green"></i> Dashboard </a>
                    </li>
                    <li class="disabled">
                       <!--  <?php 
                        if (mysqli_num_rows($biodata) > 0) {
                            ?> -->
                              <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-user  text-green"></i> Personal Info <i class="fa fa-check-circle fa-lg pull-right text-green"></i>  </a>
                             
                           <!--  <?php

                         }else{
                            ?> -->
                          <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-user  text-green"></i> Personal Info <i class="fa fa-warning fa-lg pull-right text-red"></i>  </a>
                           <!--  <?php

                         }
                         ?> -->
                    </li>
                     <li class="disabled">
                         <!-- <?php 
                        if (mysqli_num_rows($contact) > 0) {
                            ?> -->
                            <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-phone  text-green"></i> Contact Info <i class="fa fa-check-circle fa-lg pull-right text-green"></i> </a>
                           <!--  <?php

                         }else{
                            ?> -->
                            <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-phone  text-green"></i> Contact Info <i class="fa fa-warning fa-lg pull-right text-red"></i> </a>
                            <!-- <?php

                         }
                         ?> -->
                    </li>
                    <li class="disabled">
                       <!--  <?php 
                        if (mysqli_num_rows($olevel) > 0) {
                            ?> -->
                                <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-book  text-green"></i> Educational Background <i class="fa fa-check-circle fa-lg pull-right text-green"></i></a>
                            <!-- <?php

                         }else{
                            ?> -->
                            <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-book  text-green"></i> Educational Background <i class="fa fa-warning fa-lg pull-right text-red"></i></a>
                            <!-- <?php

                         }
                         ?> -->
                    </li>
                    <li class="disabled">
                       <!--  <?php 
                        if (mysqli_num_rows($nok) > 0) {
                            ?> -->
                               <a href="Referee-view.php" class="waves-effect waves-dark text-green diaable"><i class="fa fa-user  text-green"></i> Referee <i class="fa fa-check-circle fa-lg pull-right text-green"></i></a>
                           <!--  <?php

                         }else{
                            ?> -->
                           
                            <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-user  text-green"></i> Referee <i class="fa fa-warning fa-lg pull-right text-red"></i></a>
                           <!--  <?php

                         }
                         ?> -->
                    </li>
                    <li class="disabled">
                        <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-money  text-green"></i> My Payment </a>
                    </li>
                    <li class="disabled">
                        <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-file  text-green"></i> Preview</a>
                    </li>
                     <li class="disabled">
                        <a href="#" class="waves-effect waves-dark text-green"><i class="fa fa-key  text-green"></i> Reset Password</a>
                    </li>
                   <!--  <li>
                        <a href="cash.php" class="waves-effect waves-dark"><i class="fa fa-money"></i> COntact Info</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-users"></i>  <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_customer.php">Add Customer(s)</a>
                            </li>
                            <li>
                                <a href="manage_customers.php">Manage Customer(s)</a>
                            </li>
                        </ul>
                    </li>
          <li>
                        <a href="sales_report.php" class="waves-effect waves-dark"><i class="fa fa-bar-chart-o"></i> Sales Report</a>
                    </li>
                     <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-qrcode"></i> Stock <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="add_stock.php">Add Stock</a>
                            </li>
                            <li>
                                <a href="manage_stocks.php">Manage Stock</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="tab-account.php" class="waves-effect waves-dark"><i class="fa fa-dollar"></i> Account</a>
                    </li>
                     -->
                   <!--  -->
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-3"> 
                       <!--  <h1 class="page-header">

                             Contact Info
                        </h1> -->
					<!-- 	<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Contact Info</li>
					</ol>  -->
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card col-md-8 col-sm-offset-1">
                        <div class="card-action">
                             Change Password
                        </div>
                        <div class="card-content">
                          <?php $operation->display_message(); ?>
                                <form class="" method="post">
                             <!--      <div class="row"> -->
                                    <div class="col s12">
                                <input type="hidden" name="appID" value="<?php echo $_SESSION['AppID'] ?>">
                                 <input type="hidden" name="username" value="<?php echo $row["EMAIL"] ?>">
                                          <div class="input-field col-md-7 col-sm-offset-2">
                                    
                                          <input  type="password" name="password" class="validate" required>
                                          <label>Please Enter Your New Password</label>
                                        </div>
                                        <div class="input-field col-md-7 col-sm-offset-2">
                              
                                          <input  type="password" name="cpassword" class="validate" required>
                                          <label>Retype Password</label>
                                        </div> 
                                     </div>
                              <!--       </div> -->
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4 mb-5">
                                         <button class="btn primary-color text-light form-control" name="btn_update_pass" type="submit">CHANGE PASSWORD</button>
                                    </div>   
                                  </div>
                                     <div class="col s12">
                                       <p style="background-color: #eee;" class="text-center table-bordered">Dear Prospective ODFeL Applicant please endavour to change your password before progresssing to complete your application. Thank You</p>
                                     </div>
                                </form>
                                <div class="clearBoth"></div>
                            </div>
                           <!--  Card-Content -->
                        </div>
                    </div>
                    <!--End Advanced Tables -->
   </div>
  
    <!-- /. ROW  -->
   <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large primary-color">
<i class="material-icons">menu</i>
</a>
<ul>
<li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
</ul>
</div>


    

    </footer>
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include('js_script.php'); ?>
</div>
<!-- <script>
  document.getElementById('state').addEventListener('click', getState);

  function getState() {

    fetch('assets/json/state.json')
    .then((val) => val.json())
    .then((value) {
     document.getElementById('output').innerHTML = value;
    })

    // body...
  }
</script> -->
</body>

</html>