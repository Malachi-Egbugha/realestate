<?php 
require_once('classes/autoloader.php');
$operation = new ApplicantView();
$operation->applicant_controll_access();
$data = $operation->viewAllApplicantInfo($_SESSION['AppID']);
$row = mysqli_fetch_assoc($data);

$qr = $row["APPID"];
require_once 'myqrcode.php';

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
                        <!-- <h1 class="page-header">

                              Payment(s)
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
         <div class="card">
                       
                        <div class="card-content">
                               
                                 <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-2">
                                      <img src="./assets/img/kadpoly.jpg" width="80" height="80">
                                    </div>
                                    <div class="col-md-7 text-center">
                                      <h2 style="font-weight: bold;">KADUNA POLYTECHNIC</h2>
                                      <h6>Polytechnic Road P.M.B 2021, Tudun Wada, Kaduna State</h6>
                                      <h6>Telephone: +2348180599505</h6>
                                      <h5 style="font-weight: bold;">ODFel Application Form (2020/2021)</h5>
                                    </div>
                                    <div class="col-md-3">
                                      <?php echo '<img class="pull-right " src="'.$PNG_WEB_DIR.basename($filename).'" width="80" height="80">'; ?>
                                      
                                    </div>

                                  </div>
                                
                                </div>

                                <div class="col-md-12">
                                  <div class="card">
                                  <div class="row">
                                    <div class="col-md-3 mt-1">
                                      <?php 
                                      if ($row["PICTURE"] != "") {

                                        ?>
                                          <img src="uploads/<?php echo $row["PICTURE"]; ?>" id="img_preview"  class="mb-2" height="200" width="150" style="border: 1px solid grey"><br>
                                        <?php
                                        # code...
                                      }else{
                                        ?>
                                         <img src="assets/img/user-icon.jpg" id="img_preview" class="mb-2"  width="150" height="200" style="border: 1px solid grey"><br>
                                        <?php
                                      }
                                     ?>
                                    
                                    </div>
                                    <div class="col-md-6">
                                      <table class="table mt-1" style="font-size: 12px;">
                                       <tr>
                                       <th>Application No:</th>
                                       <td><?php echo $row["APPID"]; ?></td>
                                      </tr>
                                      <tr>
                                       <td>Email Address:</td>
                                       <td><?php echo $row["EMAIL"]; ?></td>
                                      </tr>
                                       <tr>
                                       <td>Full Name:</td>
                                       <td><?php echo $row["FIRST_NAME"]." ".$row["LAST_NAME"]." ".$row["MIDDLE_NAME"]; ?></td>
                                      </tr>
                                      <tr>
                                       <td>Gender:</td>
                                       <td><?php echo $row["GENDER"]; ?></td>
                                      </tr>
                                       <tr>
                                       <td>Date of Birth:</td>
                                       <td><?php
                                       $date= new DateTime($row["DOB"]); 
                                       echo $date->format('d M, Y'); ?>
                                         
                                       </td>
                                      </tr>
                                      <tr>
                                       <td>Mobile No:</td>
                                       <td><?php echo $row["TELEPHONE"]; ?></td>
                                      </tr>
                                   </table>
                                    </div>
                                    </div>
                                  </div>
                                </div>
                                <hr>

                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-action"  style="font-size: 18px;">
                                          Contact Details
                                        </div>
                                        <div class="card-content">
                                          <table class="table" style="font-size: 12px;">
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
                                      </div>
                                    </div>

                                    <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-action"  style="font-size: 18px;">
                                          Programme Details
                                        </div>
                                        <div class="card-content">
                                          <table class="table" style="font-size: 12px;">
                                      <tr>
                                       <th>Programme:</th>
                                       <td><?php echo $row["PROGRAMME"]; ?></td>
                                      </tr>
                                      <tr>
                                       <th>Programme Type:</th>
                                       <td><?php echo $row["PROGRAMME_NATURE"]; ?></td>
                                      </tr>
                                       <tr>
                                       <th>Entry Level</th>
                                       <td><?php echo $row["ENTRY_LEVEL"]; ?></td>
                                      </tr>
                                      <tr>
                                       <th>Dtae Applied</th>
                                       <td><?php 
                                         $date = new DateTime($row["DATE"]);
                                        echo $date->format('d M, Y');

                                         ?></td>
                                      </tr>
                                   </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      
                                    </div>

                                    <div class="col-md-12">
                                  <div class="row">

                                    <div class="col-md-12">
                                      <div class="card">
                                        <div class="card-action"  style="font-size: 18px;">
                                          O'level Details
                                        </div>
                                        <div class="card-content">
                                          <table class="table table-bordered" style="font-size: 12px;">
                                       <tr>
                                          <th width="250">Number of Sittings:</th>
                                          <td><?php echo $row["Sittings"]; ?></td>
                                      </tr>
                                      <tr>
                                          <th>Examination Number:</th>
                                          <td> <?php echo $row["Exam_Number"]; ?></td>
                                      </tr>
                                      <tr>
                                          <th>Examination Type:</th>
                                          <td><?php echo $row["Exam_Type"]; ?></td>
                                      </tr>
                                      <tr>
                                          <th>Examination Year:</th>
                                          <td><?php echo $row["Exam_Year"]; ?></td>
                                      </tr>
                                  </table>
                                  <hr>
                                  <table class="table table-bordered" style="font-size: 12px;">
                                       <tr>
                                          <th width="250"> <?php echo $row["Subject1"]; ?>:</th>
                                          <td> <?php echo $row["Grade1"]; ?> </td>
                                      </tr>
                                      <tr>
                                          <th> <?php echo $row["Subject2"]; ?>:</th>
                                          <td> <?php echo $row["Grade2"]; ?> </td>
                                      </tr>
                                      <tr>
                                          <th> <?php echo $row["Subject3"]; ?>:</th>
                                          <td> <?php echo $row["Grade3"]; ?> </td>
                                      </tr>
                                      <tr>
                                          <th> <?php echo $row["Subject4"]; ?> :</th>
                                          <td> <?php echo $row["Grade4"]; ?> </td>
                                      </tr>
                                       <tr>
                                          <th> <?php echo $row["Subject5"]; ?> :</th>
                                          <td> <?php echo $row["Grade5"]; ?> </td>
                                      </tr>
                                       <tr>
                                          <th> <?php echo $row["Subject6"]; ?> :</th>
                                          <td> <?php echo $row["Grade6"]; ?> </td>
                                      </tr>
                                       <tr>
                                          <th> <?php echo $row["Subject7"]; ?> :</th>
                                          <td> <?php echo $row["Grade7"]; ?> </td>
                                      </tr>
                                       <tr>
                                          <th> <?php echo $row["Subject8"]; ?> :</th>
                                          <td> <?php echo $row["Grade8"]; ?> </td>
                                      </tr>
                                       <tr>
                                          <th> <?php echo $row["Subject9"]; ?> :</th>
                                          <td> <?php echo $row["Grade9"]; ?> </td>
                                      </tr>


                                  </table>

                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                      
                                    </div>

                                    <div class="col-md-12">
                                      <div class="col-md-12">
                                        <div class="card">
                                        <div class="card-action" style="font-size: 18px;">
                                          Next of Kin
                                        </div>
                                        <div class="card-content">
                                        <table class="table" style="font-size: 12px;">
                                      <tr>
                                          <th width="200">Full Name:</th>
                                          <td><?php echo $row["NOK_FIRST_NAME"]." ".$row["NOK_LAST_NAME"]." ".$row["NOK_MIDDLE_NAME"]; ?></td>
                                      </tr>
                                      <tr>
                                          <th> Phone :</th>
                                          <td> <?php echo $row["NOK_PHONE"]; ?> </td>
                                      </tr>
                                      <tr>
                                          <th> Email :</th>
                                          <td> <?php echo $row["NOK_EMAIL"]; ?>  </td>
                                      </tr>
                                      <tr>
                                          <th> Address:</th>
                                          <td> <?php echo $row["NOK_ADDRESS"]; ?>  </td>
                                      </tr>
                                  </table>
                                      </div>
                                    </div>
                                    <div class="col-md-4 col-sm-offset-4 mt-5">
                                  <a href="KADPOLY-ODFEL%20Application%20Form.php" class="form-control pull-right btn" style="background-color: #242424; color: #fff;">Print</a>
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