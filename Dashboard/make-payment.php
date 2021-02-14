<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->payment();
$sql = $operation->getPropertyPrice($_SESSION['property_id']);
$data = mysqli_fetch_array($sql);

$query = $operation->fetch_percentage();
$datum = mysqli_fetch_array($query);

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

                             Make Payment
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card col s7">
                        <div class="card-action">
                             Make Payment
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <form class="col s12" method="post">
                                  <div class="row">
                                    <input type="hidden" name="customer_id" value="<?php echo $_SESSION['user_id'];?>">
                                    <input type="hidden" name="amount" id="price" value="<?php echo $data["price"];?>">
                                     <input type="hidden" name="pabuja_id" value="<?php echo $data["pabuja_id"];?>">
                                     <input type="hidden" name="complete_amount" id="complete_amount" value="">
                                     <input type="hidden" name="first_payment" id="first_payment" value="<?php echo $datum["first_payment"]?>">

                                    <div class="input-field col s12 mb-5">
                                          <!-- <i class="material-icons prefix">money</i> -->
                                          <select name="payment_type" class="form-control" id="selectOption">
                                            <option value="">Select Mode of Payment ......</option>
                                            <option value="Out Rightly">Complete Payment (Out Rightly)</option>
                                            <option value="Installmental">Installmental Payment 50% 30% 20%</option>
                                          </select>
                                         <!--  <label>Payment Type</label> -->
                                        </div>
                                      <div class="input-field col s12 mb-5">
                                          <i class="material-icons prefix">map</i>
                                          <input  type="number" name="no_plot" id="plot" class="validate" required>
                                          <label>Number of Plot</label>
                                        </div>
                                        
                                        
                                         <div class="input-field col s12 mb-5">
                                          <i class="material-icons prefix">money</i>
                                          <input  type="number" name="amount" id="payable" class="validate" required>
                                          
                                        </div>
                                       
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-12">
                                         <button class="btn primary-color text-light form-control" name="make_payment" type="submit">Submit</button>
                                    </div>   
                                  </div>
                                </form>
                                <div class="clearBoth"></div>
                            </div>
                           <!--  Card-Content -->
                        </div>
                        <div class="col-md-5">
                          <div class="card col s8">
                            <div class="card-action">
                             TERMS AND CONDITION APPLY
                            </div>
                              <div class="card-content">
                                <p class="mb-3"><b>Guidelines for Payment</b></p>
                                <p style="text-align: justify;">Note: if you are paying on istallmental basis, the first (1) payment is <b><?php echo $datum["first_payment"] *100;?>% </b>of the total amount and the second (2) payemnt is <b><?php echo $datum["second_payment"] *100;?>% </b> and the last payment is <b><?php echo $datum["last_payment"] *100;?>%</b></p>
                                <p>Outrightly Payment means full payment</p>
                              </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
   </div>
  
    <!-- /. ROW  -->
   <div class="fixed-action-btn horizontal click-to-toggle">
<a class="btn-floating btn-large red">
<i class="material-icons  primary-color">menu</i>
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
  document.getElementById('plot').addEventListener('input', function(e){

    var realPrice = document.getElementById('price').value;
    var f_payment = document.getElementById('first_payment').value;

    var realSelectOption = document.getElementById('selectOption').value;

    var no_plot = e.target.value;
    var complete_amount = realPrice * no_plot;
if (realSelectOption == "Out Rightly") {
  var sum = realPrice * no_plot;
  document.querySelector('#payable').setAttribute("value",sum);
  document.querySelector('#complete_amount').setAttribute("value",complete_amount);

}else{
  var sum = realPrice * no_plot * f_payment;
  document.querySelector('#payable').setAttribute("value",sum);
  document.querySelector('#complete_amount').setAttribute("value",complete_amount);
}

  

  console.log(sum);

  });
  


</script>
</body>

</html>