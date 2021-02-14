<?php 
require_once('config/db.php');
$operation = new stock();
$id = $_GET['sid'];
$data = $operation->get_stock($id);
$row = mysqli_fetch_array($data);
$operation->update_stock();
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
                            Update  Stock
                        </h1>
						<ol class="breadcrumb">
					  <li><a href="index.php">Home</a></li>
					  <li><a href="update_stock.php"> Stock</a></li>
					  <li class="active">Update Stock</li>
					</ol> 
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Form -->
        <div class="col-lg-12">
             <div class="card">
                        <div class="card-action">
                            Update Stock
                        </div>
                        <div class="card-content">
                          
    <form class="col s12" method="post">
      <div class="row">
        <div class="input-field col s6">
          <input  type="text" hidden name="stock_id" class="validate" value="<?php echo $row["stock_id"]; ?>" required>
          <input  type="text" name="product_name" class="validate" value="<?php echo $row["product_name"]; ?>" required>
          <label></label>
        </div>
        <div class="input-field col s6">
          <input  type="text" name="manufacturer" class="validate" value="<?php echo $row["manufacturer"]; ?>"  required>
          <label ></label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="quantity" class="validate"  value="<?php echo $row["quantity"]; ?>"  required>
          <label></label>
        </div>
        <div class="input-field col s6">
          <input type="text" name="price" class="validate" value="<?php echo $row["price_per_product"]; ?>"  required>
          <label></label>
        </div>
      </div>
      <div class="row">
        <div class="col s6">
          Stock Total Price:
          <div class="input-field inline">
            <input type="number" name="total" class="validate"  value="<?php echo $row["total_price"]; ?>" >
            <label data-error="wrong" data-success="right"></label>
          </div>
        </div><div class="col s6">
          Date Purchased:
          <div class="input-field inline">
            <input type="text" name="date" class="validate"  value="<?php echo $row["date_purchased"]; ?>"  required>
            <label data-error="wrong" data-success="right"></label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="col-lg-4 col-sm-offset-4">
             <button class="btn btn-info form-control" name="btn_update_stock" type="submit">Update</button>
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