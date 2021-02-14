<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->fetch_customer($_SESSION['user_id']);
// $operation = new Estate();
$operation2 = new Estate();
$operation2->addApplicantImage();
$roww = mysqli_fetch_assoc($data);
// $operation->applicant_controll_access();
// $data = $operation->viewApplicantInfo($_SESSION['AppID']);
// $roww = mysqli_fetch_assoc($data);

// $qr = $roww["APPID"];
// require_once 'myqrcode.php';
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

                             Personal Info
                        </h1>
						<!-- <ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li class="active">Personal Info</li>
					</ol>  -->
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Personal Info
                        </div>
                        <div class="card-content">
                          <?php $operation->showMessage() ?>
                            <div class="row">
                                 <div class="col-md-3 mt-2 mb-4">
                                  <form method="POST"  enctype="multipart/form-data">
                                    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['user_id'] ?>">
                                    <?php 
                                      if ($roww["PICTURE"] != "") {

                                        ?>
                                          <img src="uploads/<?php echo $roww["PICTURE"]; ?>" id="img_preview"  class="mb-2" height="160" width="160" style="border: 1px solid grey"><br>
                                        <?php
                                        # code...
                                      }else{
                                        ?>
                                         <img src="assets/img/user-icon.jpg" id="img_preview" class="mb-2" height="160" width="160" style="border: 1px solid grey"><br>
                                        <?php
                                      }
                                     ?>
                                   <input type="file" name="pic" id="upload_input" style="display: none;" accept="image/*" onchange="showPreview(event);">
                                   <button class="btn primary-color text-light" type="button" id="upload_pic"><i class="fa fa-camera"></i> Select Picture</button>
                                   <button class="btn primary-color text-light" type="submit" id="upload_btn" style="display: none;" name="bnt_upload_image"><i class="fa fa-upload"></i> Update Picture</button>
                                   <label class="file_upload_label">No Image selected</label>
                                 </form>
                                 </div>
                                 <div class="col-md-7">
                                   <table class="table table-responsive-md table-hover" style="font-size: 14px; border: 1px solid #ccc;">
                                    
                                       <tr>
                                       <td>Full Name:</td>
                                       <td><?php echo $roww["fname"]." ".$roww["lname"]." ".$roww["oname"]; ?></td>
                                      </tr>
                                       <tr>
                                       <td>Email Address:</td>
                                       <td><?php echo $roww["email"]; ?></td>
                                      </tr>
                                      <tr>
                                       <td>Gender:</td>
                                       <td><?php echo $roww["gender"]; ?></td>
                                      </tr>
                                       <tr>
                                       <td>Contact Address:</td>
                                       <td><?php echo $roww["address"]; ?></td>
                                      </tr>
                                       <tr>
                                       <td>Date Registered:</td>
                                       <td><?php 
                                       $date= new DateTime($roww["date_registered"]);
                                       echo $date->format('D M, Y');

                                       ?>
                                         
                                       </td>
                                      </tr>
                                      <tr>
                                       <td>Mobile No:</td>
                                       <td><?php echo $roww["phone"]; ?></td>
                                      </tr>
                                   </table>
                                   
                                 </div>

                                <!--  <div class="col-md-2 mt-2 mb-4">
                                      <?php echo '<img class="pull-right " src="'.$PNG_WEB_DIR.basename($filename).'" width="80" height="80">'; ?>
                                    <input type="file" class="btn btn-primary" name="">
  
                                 </div> -->

                                <div class="form-group mt-5 col-sm-4 col-md-4 col-sm-offset-4 ">
                                  <a href="Edit-bio.php" class="btn primary-color text-light form-control" style="font-size: 13px;">Edit Info</a>
                              </div>
                 </div>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
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
</div>
<script>
  Array.prototype.forEach.call(document.querySelectorAll('#upload_pic'), function(button) {
    const hiddenInput = button.parentElement.querySelector('#upload_input');
    const label = button.parentElement.querySelector('.file_upload_label');
    const defaultText =  "Select Picture";

    label.textContent = defaultText;
    label.title = defaultText;

    button.addEventListener('click', function(){
      hiddenInput.click();
    });

    hiddenInput.addEventListener('change', function(){
      const fileName = Array.prototype.map.call(hiddenInput.files, function(file){
        return file.name;
      });

      label.textContent = fileName.join(', ') || defaultText;
      label.title = label.textContent;
    });
    // body...
  });

  function showPreview(event){
    if (event.target.files.length > 0) {
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("img_preview");
      preview.src = src;
      preview.style.display = "block";

      var btn = document.getElementById("upload_pic");
      btn.style.display = "none";

      var btnPreview = document.getElementById("upload_btn");
      btnPreview.style.display = "block";

    }
  }
</script>
</body>

</html>