<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->get_percentage_id($_SESSION['edit_percentage']);
$operation->update_percentage();
$row = mysqli_fetch_assoc($data);
 ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"> 
<?php include('header.php'); ?>

<body>
    <div id="wrapper"  class="side-bg">
        <?php include('marketer-navbar.php'); ?>
	   <!--/. NAV TOP  -->
       <?php include('marketer-sidebar.php'); ?>
        <!-- /. NAV SIDE  -->
      
		<div id="page-wrapper">
		  <div class="header pt-5"> 
                        <h1 class="page-header">

                             Edit Payment Percentage
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Edit Payment Percentage
                        </div>
                        <div class="card-content">
                                <form class="col s12" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                    <?php $operation->showMessage() ?>
                                    <input type="hidden" name="percentage_id" value="<?php echo $_SESSION['edit_percentage'];?>">
                                      <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="first" value="<?php echo $row["first_payment"]; ?>" class="validate">
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="second" value="<?php echo $row["second_payment"]; ?>" class="validate">
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="last" value="<?php echo $row["last_payment"]; ?>" class="validate">
                                        </div>

                                       
                                 
                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="update_submit" type="submit">UPDATE</button>
                                    </div>   
                                  </div>
                                </form>
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

    <script>
var myObj = {
  init:function(){
    var that = this;
    this.loadState();
    document.getElementById('state').addEventListener('change', function(){
      var j = this.options[this.selectedIndex].getAttribute('id');
      that.loadLga(j);
    });
  },
  loadState:function(){
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'assets/json/state.json', true);
    xhr.onload = function(){
      var state = JSON.parse(xhr.responseText);
      state.forEach(function(value, id){
        var op = document.createElement('option');
        op.innerText = value.name;
        op.setAttribute('value', value.name);
        op.setAttribute('id', value.id);
        document.getElementById('state').appendChild(op);
      });

    } 
    
    xhr.send();
  },
  loadLga:function(val){
    document.getElementById('lga').innerHTML = 'Select LGA';
     var xhr = new XMLHttpRequest();
    xhr.open('GET', 'assets/json/lga.json', true);
    xhr.onload = function(){
      var state = JSON.parse(xhr.responseText);
      state.forEach(function(value){
        var op = document.createElement('option');
        op.innerText = value.name;
        op.innerId = value.state_id;

        if (op.innerId == val ) {
          op.setAttribute('value', value.name);
        document.getElementById('lga').appendChild(op);
        }
        
      });
    } 
    xhr.send();
  }
}

myObj.init();

</script>
    <!-- /. WRAPPER  -->
   <?php include('js_script.php'); ?>
</div>
</body>

</html>