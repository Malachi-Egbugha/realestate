<?php 
require_once('config/db.php');
$operation = new Estate();
$operation->marketer_controll_access();
$operation->land_abuja();
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

                             Available Land
                        </h1>
				
									
		</div> 
		<div id="page-inner">

<div class="dashboard-cards"> 
    <div class="row">
         <!-- Advanced Tables -->
         <div class="card">
                        <div class="card-action">
                             Available Land
                        </div>
                        <div class="card-content">
                           <?php $operation->showMessage(); ?>
                                <form class="col s12" method="post" enctype="multipart/form-data">
                                  <div class="row">
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">location_on</i>
                                          <input  type="text" name="property" class="validate" required>
                                          <label>Land Location</label>
                                        </div>
                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">money</i>
                                          <input  type="text" name="price" class="validate">
                                          <label>Amount (N) Per Plot</label>
                                        </div>
                                         
                                       <div class="col-lg-6">
                                             <label>State</label>
                                              <select name="state" id="state" class="form-control" required>
                                                  <option>Select State</option>
                                             </select>
                                       
                                        </div>

                                         <div class="col-lg-6">
                                             <label>LGA</label>
                                              <select name="lga" id="lga" class="form-control" required>
                                                    <option>Select LGA</option>
                                             </select>
                                       
                                         </div>

                                           <div class="input-field col s6">
                                          <i class="material-icons prefix">map</i>
                                          <input  type="text" name="available" class="validate">
                                          <label>Number of Available Plot</label>
                                        </div> 

                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">location_on</i>
                                          <input  type="text" name="size" class="validate" required>
                                          <label>Plot Size</label>
                                        </div>
                                         <div class="input-field col s6">
                                          <i class="material-icons prefix">map</i>
                                          <input  type="text" name="tag" class="validate">
                                          <label>Plot Tag</label>
                                        </div>

                                        <div class="input-field col s6">
                                          <i class="material-icons prefix">account_circle</i>
                                          <input  type="file" name="pics" class="validate">
                                          
                                        </div>

                                  </div>
                                 
                                  <div class="form-group">
                                    <div class="col-lg-4 col-sm-offset-4">
                                         <button class="btn primary-color text-light form-control" name="add_abuja" type="submit">Submit</button>
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



  // document.getElementById('state').addEventListener('click', getState);

  // function getState() {

  //   fetch('assets/json/state.json')
  //   .then((val) => val.json())
  //   .then((value) {
  //    document.getElementById('output').innerHTML = value;
  //   })

  //   // body...
  // }
  </script>
</body>

</html>