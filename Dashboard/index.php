<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->customer_controll_access();

// $action = new ApplicantView();


// $action = new ApplicantView();
// $action->applicant_controll_access();
// //Biodata
// $biodata = $action->checkBiodata($_SESSION['AppID']);

// //Contact
// $contact = $action->checkContact($_SESSION['AppID']);

// //Next of Kin
// $nok = $action->checkNok($_SESSION['AppID']);

// //Olevel
// $olevel = $action->checkOlevel($_SESSION['AppID']);


// $progress=20;

// if (mysqli_num_rows($biodata) > 0) {
    
//        $progress+=20;

// }

// if (mysqli_num_rows($contact) > 0) {
    
//        $progress+=20;

// }


// if (mysqli_num_rows($nok) > 0) {

//    $progress+=20;

// }

// if (mysqli_num_rows($olevel) > 0) {
    
//     $progress+=20;
// }

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper" class="side-bg">
        <?php include('navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            <p>&nbsp</p>
                            Dashboard
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="index.php">Dashboard</a></li>
					</ol> 
									
		</div>
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
        
            <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image red">
            <i class="material-icons dp48">person</i>
            </div>
            <div class="card-stacked red">
            <div class="card-content">
             <!-- <?php
            if (mysqli_num_rows($biodata) > 0) {
                ?>
                 <strong style="font-size: 10px;">SUPPLIED </strong><i class="fa fa-check-circle"></i> 
                <?php

            }else{
                ?>
                <strong style="font-size: 10px;"> NOT SUPPLIED </strong><i class="fa fa-warning"></i>
                <?php
            }

            ?>  -->
            </div>
            <div class="card-action">
            <strong style="font-size: 12px;">PERSONAL INFO</strong>
            </div>
            </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        
            <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image orange">
            <i class="material-icons dp48">supervisor_account</i>
            </div>
            <div class="card-stacked orange">
            <div class="card-content">
            <!--  <?php
            if (mysqli_num_rows($contact) > 0) {
                ?>
                 <strong style="font-size: 10px;">SUPPLIED </strong><i class="fa fa-check-circle"></i> 
                <?php

            }else{
                ?>
                <strong style="font-size: 10px;"> NOT SUPPLIED </strong><i class="fa fa-warning"></i>
                <?php
            }

            ?> -->
            </div>
            <div class="card-action">
            <strong style="font-size: 12px;">PROPERTY</strong>
            </div>
            </div>
            </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        
                <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image blue">
            <i class="material-icons dp48">supervisor_account</i>
            </div>
            <div class="card-stacked blue">
            <div class="card-content">
           <!--  <?php
            if (mysqli_num_rows($nok) > 0) {
                ?>
                 <strong style="font-size: 10px;">SUPPLIED </strong><i class="fa fa-check-circle"></i> 
                <?php

            }else{
                ?>
                <strong style="font-size: 10px;"> NOT SUPPLIED </strong><i class="fa fa-warning"></i>
                <?php
            }

            ?> -->
            </div>
            <div class="card-action">
            <strong style="font-size: 12px;">AVAILABLE PROPERTY</strong>
            </div>
            </div>
            </div> 
             
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
        
        <div class="card horizontal cardIcon waves-effect waves-dark">
            <div class="card-image green">
            <i class="material-icons dp48">book</i>
            </div>
            <div class="card-stacked green">
            <div class="card-content">
            <!--  <?php
            if (mysqli_num_rows($olevel) > 0) {
                ?>
                 <strong style="font-size: 10px;">SUPPLIED </strong><i class="fa fa-check-circle"></i> 
                <?php

            }else{
                ?>
                <strong style="font-size: 10px;"> NOT SUPPLIED </strong><i class="fa fa-warning"></i>
                <?php
            }

            ?> -->
            </div>
            <div class="card-action">
            <strong style="font-size: 10px;">MY TRANSACTION</strong>
            </div>
            </div>
            </div> 
             
        </div>
    </div>
   </div>
    <!-- /. ROW  --> 
   <!--  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="cirStats">
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6"> 
                            <div class="card-panel text-center">
                                <h4>Application Status</h4>
                                <div>
               
                <div class="progress progress-striped active">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress;?>%">
                        <span class="sr-only"><?php echo $progress;?>% Completed (success)</span>
                    </div>
                </div>
                 <p>
                    
                    <span class="pull-right text-muted"><?php echo $progress;?>% Completed</span>
                </p>
                <div style="height: 40px;"></div>
            </div>
                      
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6"> 
                            <div class="card-panel text-center">
                                <h4>Admission Status</h4>
                                <div class="fa fa-warning mb-3" style="height: 50px; color: orange; font-size: 60px;"></span>
                                </div> 
                                <div>Pending</div>
                            </div>
                    </div>
                    
                </div>
            </div>							
            </div><!--/.row-->
           
        
           

        </div>
    </div>
    <!-- /. ROW  -->
   <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large red">
<i class="material-icons">menu</i>
</a>
<ul>
<li><a class="btn-floating red"><i class="material-icons">track_changes</i></a></li>
<li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
<li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
<li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
</ul>
</div>

<?php include('footer.php'); ?>
    

    </footer>
</div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <?php include('js_script.php'); ?>

</body>

</html>