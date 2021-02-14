<?php 
require_once('config/db.php');
$operation = new Estate();
$data = $operation->get_abuja_id($_SESSION['edit']);
$operation->update_abuja();
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

                             Edit Property
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Edit Property
                        </div>
                        <div class="card-content">
                                <form class="col s12" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                    <?php $operation->showMessage() ?>
                                    <input type="text" name="pabuja_id" value="<?php echo $_SESSION['edit'];?>">
                                      <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="hidden" name="property" value="<?php echo $row["property_location"]; ?>" class="validate">
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="price" value="<?php echo $row["price"]; ?>" class="validate">
                                        </div>

                                        <div class="input-field col s6">
                                          <!-- <i class="material-icons prefix">money</i> -->
                                          <select name="state" id="state" class="form-control">
                                            <option value=""><?php echo $row["state"];?></option>
                                            
                                         <!--  <label>Payment Type</label> -->
                                       </select>
                                        </div>
                                        <div class="input-field col s6">
                                          <!-- <i class="material-icons prefix">money</i> -->
                                          <select name="lga" id="lga" class="form-control">
                                            <option value=""><?php echo $row["lga"];?></option>
                                           
                                          </select>
                                         <!--  <label>Payment Type</label> -->
                                        </div>

                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="available" value="<?php echo $row["available_plot"]; ?>" class="validate">
                                        </div>

                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="size" value="<?php echo $row["size"]; ?>" class="validate">
                                        </div>

                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="text" name="tag" value="<?php echo $row["tag"]; ?>" class="validate">
                                        </div>
                                        
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">camera</i>
                                          <input  type="file" name="pics" class="validate">
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