﻿<?php 
require_once('classes/autoloader.php');
$operation = new ApplicantView();
$data = $operation->viewContactInfo($_SESSION['AppID']);
$operation2 = new ApplicantController();
$operation->applicant_controll_access();
$operation2->deleteContactInfo($_SESSION['AppID']);
$row = mysqli_fetch_assoc($data);
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Contact Info
                        </h1>
					<!-- 	<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Contact Info</li>
					</ol>  -->
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Contact Info
                        </div>
                        <div class="card-content">
                               <?php $operation2->display_message(); ?>
                                <div class="col-md-6">
                                  <table class="table">
                                      <tr>
                                          <th width="200">State:</th>
                                          <td><?php echo $row["STATE"]; ?></td>
                                      </tr>
                                      <tr>
                                          <th>LGA :</th>
                                          <td> <?php echo $row["LGA"]; ?> </td>
                                      </tr>
                                      <tr>
                                          <th> Address:</th>
                                          <td> <?php echo $row["ADDRESS"]; ?></td>
                                      </tr>
                                  </table>
                                </div>
                                  
                               <div class="col-md-12">
                                 <div class="row">
                                   <div class="col-md-2">
                                     <div class="form-group">
                                    <div class="col s12 mb-3">
                                         <a href="Edit-Contact-info.php" class="btn primary-color text-light form-control"> UPDATE</a>
                                    </div>   
                                  </div>
                                   </div>
                                    <div class="col-md-2">
                                     <div class="form-group">
                                    <div class="col s12">
                                      <form method="post">
                                         <button class="btn btn-danger text-light form-control" name="btn_delete_contact" onclick=" return confirm('Are you sure you wan to Delete?') " type="submit"> DELETE</button>
                                      </form>
                                        
                                    </div>   
                                  </div>
                                   </div>
                                 </div>
                               </div>
                                <div class="clearBoth"></div>
                            </div>
                           <!--  Card-Content -->
                        </div>
                    </div>
                    <!--End Advanced Tables -->
   </div>
  
    <!-- /. ROW  -->
   <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large red">
<i class="material-icons primary-color">menu</i>
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
</div>
</body>

</html>