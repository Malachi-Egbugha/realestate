<?php 
require_once('config/db.php');
$operation = new stock();
$operation->add_stock();

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
                        <h1 class="page-header">
                            Add New Stock
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="add_stock.php"> Stock</a></li>
					  <li class="active">Add Stock</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Form -->
        <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Add Stock
                        </div>
                        <div class="card-content">
                          <?php $operation->display_message(); ?>
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input  type="text" name="product_name" class="validate" required>
          <label>Stock Name</label>
        </div>
        <div class="input-field col s6">
          <input  type="text" name="manufacturer" class="validate" required>
          <label >Manufaturer</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="quantity" class="validate" required>
          <label>Quantity</label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="price" class="validate" required>
          <label>Price Per Product</label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          Stock Total Price:
          <div class="input-field inline">
            <input type="number" name="total" class="validate">
            <label data-error="wrong" data-success="right">Total Price</label>
          </div>
        </div><div class="col s6">
          Date Purchased:
          <div class="input-field inline">
            <input type="date" name="date" class="validate" required>
            <label data-error="wrong" data-success="right"></label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-4 col-sm-offset-4">
             <button class="btn btn-info form-control" name="btn_add_stock" type="submit">Submit</button>
        </div>   
      </div>
    </form>
    <div class="clearBoth"></div>
  </div>
    </div>
 </div> 
                    <!--End Form -->
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