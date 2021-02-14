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
                              <div class="col-md-9">
                                   <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="margin-top: ;">
                              <tr style="background-color: ; border: 2px dotted gray;">
                                <th>Customer's Name:</th>
                                <td>Adam Musa </td>
                              </tr>
                               <tr style="background-color: ; border: 2px dotted gray;">
                                <th>Transaction Date:</th>
                                <td>2019-08-06 06:41:22</td>
                              </tr>
                               <tr style="background-color: ; border: 2px dotted gray;">
                                <th>Reciept No:</th>
                                <td>36929290</td>
                              </tr>
                              
                            </table>
                            <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="border: 4px thin black; margin-top: -22px;">
                                <tr class="" style="background-color: ; border: 2px dotted gray;">
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Amount</th>
                              </tr>
                              

                                            <tr style="background-color: ; border: 2px dotted gray;">
                                <td>Five Alive</td>
                                <td>2</td>
                                <td>550</td>
                                <td>1100</td>
                               </tr>
                                          <tr style="background-color: ; border: 2px dotted gray;">
                                <td>Jeans</td>
                                <td>2</td>
                                <td>2500</td>
                                <td>5000</td>
                               </tr>
                                          <tr style="background-color: ; border: 2px dotted gray;">
                                <td>Jeans</td>
                                <td>1</td>
                                <td>2500</td>
                                <td>2500</td>
                               </tr>
                                         
                              <tr style="background-color: ; border: 2px dotted gray;">
                                <td align="right" colspan="4" style="padding-right: 35px; font-size: 17px;"><b>Total: </b> 

                                <del><b>N</b></del> 8,600          </td>
                                
                             
                            </table>
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
</body>

</html>