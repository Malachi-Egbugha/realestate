<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper">
        <?php include('navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Sales Report
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="sales_report.php">Sales</a></li>
					  <li class="active">Sales Report</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Sales Report
                        </div>
                        <div class="card-content">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Customer Name</th>
                                            <th>Receipt No.</th>
                                            <th>Trasaction Date</th>
                                            <th class="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>1</td>
                                            <td>Adam Musa Yau</td>
                                            <td>358553311</td>
                                            <td>08/12/2020</td>
                                            <td class="center"><a href="more_report.php" class="btn btn-info btn-sm">More Details</a></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td>2</td>
                                            <td>Sani Abdullahi</td>
                                            <td>633456</td>
                                            <td>08/12/2020</td>
                                            <td class="center"><a href="more_report.php" class="btn btn-info btn-sm">More Details</a><br></td>
                                        </tr>
                                        <tr class="even gradeC">
                                            <td> 3</td>
                                            <td> Umar Ibrahim</td>
                                            <td>4199342</td>
                                            <td>08/12/2020</td>
                                            <td class="center"><a href="more_report.php" class="btn btn-info btn-sm">More Details</a><br></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
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
</body>

</html>