<?php 
  require_once('config/db.php');
  $transaction = new transaction();
 ?>
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
                        <h3 class="page-header">
                            Generate Invoice
                        </h3>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="generate_invoice.php"> Invoice</a></li>
					  <li class="active">Invoice</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"   style="margin-top: -70px;"> 
    <div class="row">
         <!-- Form -->
        <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                           <div class="row">  
                             <div class="col-lg-3">
                                New Invoice
                            </div> 
                            <form method="post">
                             <div class="col-lg-4"> 
                                <input type="text" name="search" placeholder="Search Procuct">
                             </div> 
                             <div class="col-lg-2"> 
                                <button class="btn" type="submit" name="btn_search">Search</button>
                              </div> 
                              </form>
                            </div>
                            
                        </div>
                        <div class="card-content">
                          <div class="row" style="margin-top: -80px;">
                           <div class="col-md-12">
                             <?php $transaction->search_product(); ?>
                           </div>
                          </div>

                          <div class="row"  style="margin-top: -70px;">
                            <div class="col-md-9" style=""> 
                              <table class="table table-striped table-hover">
                                 <thead>
                                   <tr class="bg-info">
                                     <th>Item</th>
                                     <th>Quantity</th>
                                     <th>Price</th>
                                     <th class="text-center">Total Amount</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                   <tr>
                     <td>Five Alive</td>
                     <td>18</td>
                     <td>550</td>
                     <td class="text-center"><span><del><b>N</b></del></span>9,900</td>
                   </tr>
                 </tbody>
                 
                 <tbody>
                   <tr>
                     <td>Jeans</td>
                     <td>3</td>
                     <td>2300</td>
                     <td class="text-center"><span><del><b>N</b></del></span>7,300</td>
                   </tr>
                 </tbody>
                 
                 <tbody>
                   <tr>
                     <td>Jeans</td>
                     <td>3</td>
                     <td>2000</td>
                     <td class="text-center"><span><del><b>N</b></del></span>7,000</td>
                   </tr>
                 </tbody>
                 
                 <tbody>
                   <tr>
                     <td>Five Alive</td>
                     <td>9</td>
                     <td>550</td>
                     <td class="text-center"><span><del><b>N</b></del></span>4,950</td>
                   </tr>
                 </tbody>
                 
                 <tbody>
                   <tr>
                     <td>Five Alive</td>
                     <td>7</td>
                     <td>550</td>
                     <td class="text-center"><span><del><b>N</b></del></span>3,850</td>
                   </tr>
                 </tbody>
                             </table>
                            </div>
                            <div class="col-lg-3 " > 
                              <!-- <div class="col-md-12 bg-info text-center" style="font-size: 30px; height: 100px;" >
                                <del><b>N</b></del>33,000,00  
                              </div> -->

                              <div class="col-md-12 bg-success text-center" style="font-size: 30px; margin-top:; height: 150px; padding-top: 50px;" >
                                <del><b>N</b></del><b>33,000,00</b>  
                              </div>
                              
                            </div> 
                             <div class="form-group col-md-4 col-sm-offset-3">
                                <a href="print_receipt.php" class="btn btn-info form-control"> <span class="fa fa-credit-card"></span> Generate Invoice</a>
                             </div>
                          </div>
                        
                    <!--End Form -->
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
</div>
</body>

</html>