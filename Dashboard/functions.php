<?php  

/**
 * 
 */

$db = new Config();


class Estate extends Config{

	// Inserting Recored into DB

	public function add_Customer1(){
		global $db;

		if (isset($_POST['btn_submit'])){

			move_uploaded_file($_FILES["pics"]["tmp_name"],"uploads/" . $_FILES["pics"]["name"]);      
            $location=$_FILES["pics"]["name"];
			$fname = $db->check($_POST['fname']);
			$lname = $db->check($_POST['lname']);
			$oname = $db->check($_POST['oname']);
			$address = $db->check($_POST['address']);
			$gender = $db->check($_POST['gender']);
			$phone = $db->check($_POST['phone']);
			$email = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);
		   	
		   	$query2 = "SELECT * FROM customer WHERE email = '$email'";
			$result2 = mysqli_query($db->connection, $query2);
			$sql=mysqli_num_rows($result2);

				if ($sql>0) {

					$this->setMessage("<div class='alert alert-danger text-center'> Email already Exist !!!</div>");

				}else{


			if ($this->insert_customer($fname,$lname,$oname,$gender,$address,$phone,$email,$password,$location)) {
				$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Customer Registered Sucessfully</div>");
		 		
			}else{
				$this->setMessage("<div class='alert alert-danger'>Failed</div>");
			}}

		}
	}	

		function insert_customer($a,$b,$c,$d,$e,$f,$g,$h,$i){
			global $db;
			$query = "INSERT INTO customer(fname,lname,oname,gender,address,phone,email,password,PICTURE) VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}

		}


		//////////////////


		 public function addApplicantImage(){

            if (isset($_POST['bnt_upload_image'])) {

                move_uploaded_file($_FILES["pic"]["tmp_name"],"uploads/" . $_FILES["pic"]["name"]);      
                $image=$_FILES["pic"]["name"];
                $customer_id = $this->check($_POST['customer_id']);

                if ($this->saveApplicantImage($customer_id, $image)) {

                    $this->setMessage('<div class="alert alert-success text-center"> Image Uploaded Successfully</div>');
                    ?>
                    <script>
                        setTimeout(() => window.location.href = "Bio-data.php", 2000);
                    </script>

                <?php
                    # code...
                }else{

                    $this->setMessage('<div class="alert alert-danger"> Failed to update record! </div>');
                    ?>
                     <script>
                        setTimeout(() => window.location.href = "Bio-data.php", 2000);
                    </script>
                    <?php
                }
                # code...
            }

        }


        public function saveApplicantImage($u_id,$a){
			global $db;
			$query = "UPDATE customer SET PICTURE = '$a' WHERE customer_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}


		

		

        // Update Customer


        public function update_customer(){
			global $db;
			if (isset($_POST['btn_update_customer'])) {
				$customer_id = $db->check($_POST['customer_id']);
				$fname = $db->check($_POST['fname']);
				$lname = $db->check($_POST['lname']);
				$oname = $db->check($_POST['oname']);
				$email = $db->check($_POST['email']);
				$phone = $db->check($_POST['phone']);
				$gender = $db->check($_POST['gender']);

				if ($this->insert_update_customer($customer_id,$fname,$lname,$oname,$email,$phone,$gender)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Record Updated Sucessfully</div>");
			 		?>
			 		 <script>
                        setTimeout(() => window.location.href = "Bio-data.php", 2000);
                    </script>
                    <?php
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}

		public function insert_update_customer($u_id,$a,$b,$c,$d,$e,$f){
			global $db;
			$query = "UPDATE customer SET fname = '$a', lname = '$b', oname = '$c', email = '$d', phone ='$e', gender = '$f' WHERE customer_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}


		// GET ID


		public function get_Record($user_id){
			global $db;
			$query = "SELECT * FROM admin WHERE admin_id  = '$user_id'";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}


		// Make Prescription

		public function fetch_customer($user){
			global $db;
			$query = "SELECT * FROM customer WHERE customer_id = '$user'";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}


		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //ADDING PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


		// PROPERTY IN ABUJA



		public function property_abuja(){
		global $db;

		if (isset($_POST['add_abuja'])){
			move_uploaded_file($_FILES["pics"]["tmp_name"],"plot/" . $_FILES["pics"]["name"]);      
			$location=$_FILES["pics"]["name"];
			$property = $db->check($_POST['property']);
			$price= $db->check($_POST['price']);
			$available= $db->check($_POST['available']);
			$state= $db->check($_POST['state']);
			$lga= $db->check($_POST['lga']);
			$size= $db->check($_POST['size']);
			$tag= $db->check($_POST['tag']);
			$av = 0;

			
			if ($this->insert_property_abuja($property,$price,$available,$location,$state,$lga,$size,$tag,$av)) {
				$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Properety Added Sucessfully!!!</div>");
				?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-property.php", 2000);
			 		</script>
			 		<?php
		 		
			}else{
				$this->setMessage("<div class='alert alert-danger'>Failed</div>");
			}

		}
	}	


	public function land_abuja(){
		global $db;

		if (isset($_POST['add_abuja'])){
			move_uploaded_file($_FILES["pics"]["tmp_name"],"land/" . $_FILES["pics"]["name"]);      
			$location=$_FILES["pics"]["name"];
			$property = $db->check($_POST['property']);
			$price= $db->check($_POST['price']);
			$available= $db->check($_POST['available']);
			$state= $db->check($_POST['state']);
			$lga= $db->check($_POST['lga']);
			$size= $db->check($_POST['size']);
			$tag= $db->check($_POST['tag']);
			$av = 0;

			
			if ($this->insert_land_abuja($property,$price,$available,$location,$state,$lga,$size,$tag,$av)) {
				$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Land Added Sucessfully!!!</div>");
				?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-land.php", 2000);
			 		</script>
			 		<?php
		 		
			}else{
				$this->setMessage("<div class='alert alert-danger'>Failed</div>");
			}

		}
	}	


		public function insert_property_abuja($a,$b,$c,$d,$e,$f,$g,$h,$av){
			global $db;
			$query = "INSERT INTO property_abuja(property_location,price,available_plot,pics,state,lga,size,tag,available) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$av')";
			$result = mysqli_query ($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}

		}

		public function insert_land_abuja($a,$b,$c,$d,$e,$f,$g,$h,$av){
			global $db;
			$query = "INSERT INTO land_abuja(property_location,price,available_plot,pics,state,lga,size,tag,available) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$av')";
			$result = mysqli_query ($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}

		}



		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 // ENDING ADDING PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //MANAGE BUILDINGS//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


	public function get_kano(){
			global $db;
			if (isset($_POST['btn_search'])){
			$search = $db->check($_POST['search']);

			$query = "SELECT * FROM property_abuja WHERE state LIKE '%$search%'";
			$result = mysqli_query ($db->connection, $query);
			return $result;
		}else{
			$query = "SELECT * FROM property_abuja";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}
	}

//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //MANAGE LANDS//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


public function get_kanolands(){
	global $db;
	if (isset($_POST['btn_search'])){
	$search = $db->check($_POST['search']);

	$query = "SELECT * FROM land_abuja WHERE state LIKE '%$search%'";
	$result = mysqli_query ($db->connection, $query);
	return $result;
}else{
	$query = "SELECT * FROM land_abuja";
	$result = mysqli_query ($db->connection, $query);
	return $result;

}
}






//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //END MANAGE PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //GET PROPERTY ID//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++



		public function get_abuja_id($pabuja_id){
			global $db;
			$query = "SELECT * FROM property_abuja WHERE pabuja_id = '$pabuja_id'";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}

		public function get_landabuja_id($pabuja_id){
			global $db;
			$query = "SELECT * FROM land_abuja WHERE pabuja_id = '$pabuja_id'";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}


		//

		public function get_percentage_id($percentage_id){
			global $db;
			$query = "SELECT * FROM percentage WHERE percentage_id = '$percentage_id'";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}

	


		//

		public function get_kano_id($pkano_id){
			global $db;
			$query = "SELECT * FROM property_kano WHERE pkano_id = '$pkano_id'";
			$result = mysqli_query ($db->connection, $query);
			return $result;

		}


//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //END MANAGE PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //EDIT PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


		public function  update_pkano(){
			global $db;
			if (isset($_POST['update_submit'])) {
				$pkano_id = $db->check($_POST['pkano_id']);
				move_uploaded_file($_FILES["pics"]["tmp_name"],"plot/" . $_FILES["pics"]["name"]);      
				$location=$db->check($_FILES["pics"]["name"]);
				$property = $db->check($_POST['property']);
				$amount = $db->check($_POST['amount']);
				$available = $db->check($_POST['available']);
			
				if ($this->insert_update_pkano($pkano_id,$property,$amount,$available,$location)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Property in Kano Updated Sucessfully</div>");
			 		?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-property-kano.php", 2000);
			 		</script>
			 		<?php
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}

		public function insert_update_pkano($u_id,$a,$b,$c,$d){
			global $db;
			$query = "UPDATE property_kano SET property_location = '$a', amount = '$b', available_plot = '$c', pics = '$d' WHERE pkano_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}

		
		///////////


		public function  update_abuja(){
			global $db;
			if (isset($_POST['update_submit'])) {
				$pabuja_id = $db->check($_POST['pabuja_id']);
				move_uploaded_file($_FILES["pics"]["tmp_name"],"plot/" . $_FILES["pics"]["name"]);      
				$location=$db->check($_FILES["pics"]["name"]);
				$property = $db->check($_POST['property']);
				$price = $db->check($_POST['price']);
				$available = $db->check($_POST['available']);
				$size = $db->check($_POST['size']);
				$tag = $db->check($_POST['tag']);
				$state = $db->check($_POST['state']);
				$lga = $db->check($_POST['lga']);

			
				if ($this->insert_update_pabuja($pabuja_id,$property,$price,$available,$size,$tag,$state,$lga,$location)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Property in Abuja Updated Sucessfully</div>");
			 		?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-property.php", 2000);
			 		</script>
			 		<?php
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}
		////////
		public function  update_landabuja(){
			global $db;
			if (isset($_POST['update_submit'])) {
				$pabuja_id = $db->check($_POST['pabuja_id']);
				move_uploaded_file($_FILES["pics"]["tmp_name"],"land/" . $_FILES["pics"]["name"]);      
				$location=$db->check($_FILES["pics"]["name"]);
				$property = $db->check($_POST['property']);
				$price = $db->check($_POST['price']);
				$available = $db->check($_POST['available']);
				$size = $db->check($_POST['size']);
				$tag = $db->check($_POST['tag']);
				$state = $db->check($_POST['state']);
				$lga = $db->check($_POST['lga']);

			
				if ($this->insert_update_landpabuja($pabuja_id,$property,$price,$available,$size,$tag,$state,$lga,$location)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Land in Abuja Updated Sucessfully</div>");
			 		?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-land.php", 2000);
			 		</script>
			 		<?php
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}
		//////

		public function insert_update_pabuja($u_id,$a,$b,$c,$d,$e,$f,$g,$h){
			global $db;
			$query = "UPDATE property_abuja SET property_location = '$a', price = '$b', available_plot = '$c', size ='$d', tag = '$e', state = '$f', lga = '$g', pics = '$h' WHERE pabuja_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}
		public function insert_update_landpabuja($u_id,$a,$b,$c,$d,$e,$f,$g,$h){
			global $db;
			$query = "UPDATE land_abuja SET property_location = '$a', price = '$b', available_plot = '$c', size ='$d', tag = '$e', state = '$f', lga = '$g', pics = '$h' WHERE pabuja_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}




		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //EDIT PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		// 

		public function add_percentage(){
			global $db;
			if (isset($_POST['btn_percentage'])) {

				$first_payment = $db->check($_POST['first']);
				$second_payment = $db->check($_POST['second']);
				$last_payment = $db->check($_POST['last']);

				if ($this->insert_percentage($first_payment,$second_payment,$last_payment)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Percentage Sucessfully Registered</div>");
			 		
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}

		public function insert_percentage($a,$b,$c){
			global $db;
			$query = "INSERT INTO percentage (first_payment,second_payment,last_payment) VALUES ('$a','$b','$c')";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}

		//

		public function  update_percentage(){
			global $db;
			if (isset($_POST['update_submit'])) {
				$percentage_id = $db->check($_POST['percentage_id']);
				$first_payment = $db->check($_POST['first']);
				$second_payment = $db->check($_POST['second']);
				$last_payment = $db->check($_POST['last']);

			
				if ($this->insert_update_percentage($percentage_id,$first_payment,$second_payment,$last_payment)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Percentage Sucessfully</div>");
			 		?>
			 		<script type="text/javascript">
			 			setTimeout(() => window.location.href = "manage-percentage.php", 2000);
			 		</script>
			 		<?php
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}

		public function insert_update_percentage($u_id,$a,$b,$c){
			global $db;
			$query = "UPDATE percentage SET first_payment = '$a',second_payment = '$b', last_payment = '$c' WHERE percentage_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}


		
		// Add Admin

		public function add_admin(){
			global $db;
			if (isset($_POST['btn_admin'])) {

				$fname = $db->check($_POST['fname']);
				$lname = $db->check($_POST['lname']);
				$oname = $db->check($_POST['oname']);
				$email = $db->check($_POST['email']);
				$password = $db->check($_POST['password']);

				$query2 = "SELECT * FROM admin WHERE email = '$email'";
				$result2 = mysqli_query($db->connection, $query2);
				$sql=mysqli_num_rows($result2);

					if ($sql>0) {

						$this->setMessage("<div class='alert alert-danger text-center'> Admin already exist !!!</div>");

					}else{

				if ($this->insert_admin($fname,$lname,$oname,$email,$password)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Admin Sucessfully Registered</div>");
			 		
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}}
			}
		}

		public function insert_admin($a,$b,$c,$d,$e){
			global $db;
			$query = "INSERT INTO admin (firstname, lastname, othernames, email, password) VALUES ('$a','$b','$c','$d','$e')";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}

		//UPDATE ADMIN


		public function update_admin(){
			global $db;
			if (isset($_POST['submit'])) {
				$admin_id = $db->check($_POST['admin_id']);
				move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);      
				$location=$db->check($_FILES["pics"]["name"]);
				$fullname = $db->check($_POST['fullname']);
				$email = $db->check($_POST['email']);
				$phone = $db->check($_POST['phone']);
				$gender = $db->check($_POST['gender']);
				$username = $db->check($_POST['username']);
				$password = $db->check($_POST['password']);


				if ($this->insert_update_admin($admin_id,$fullname,$email,$phone,$gender,$username,$password,$location)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Admin Updated Sucessfully</div>");
			 		header("location:manage_admin.php");
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
			}
		}

		public function insert_update_admin($u_id,$a,$b,$c,$d,$e,$f,$g){
			global $db;
			$query = "UPDATE admin SET fullname = '$a', email = '$b', phone = '$c', gender = '$d', username ='$e', password = '$f', pics = '$g' WHERE admin_id = '$u_id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}


		// FETCH ALL ADMIN

		public function fetch_admin(){
			global $db;
			$query = "SELECT * FROM admin";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}


		// FETCH PERCENTAGE

		public function fetch_percentage(){
			global $db;
			$query = "SELECT * FROM percentage";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}




		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //DELETE PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		//DELETE DELETE RECORD


	public function delete_property($id){
			global $db;
			$query = "DELETE FROM property_abuja WHERE pabuja_id = '$id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				return true;
			}else{
				return false;
			}
	}



	//DELETE ADMIN RECORD


	public function delete_admin($id){
			global $db;
			$query = "DELETE FROM admin WHERE admin_id = '$id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				return true;
			}else{
				return false;
			}
	}


	//DELETE DELETE ABUJA


	public function delete_abuja($id){
			global $db;
			$query = "DELETE FROM property_abuja WHERE pabuja_id = '$id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				return true;
			}else{
				return false;
			}
	}
	//delete land
	public function delete_land($id){
		global $db;
		$query = "DELETE FROM land_abuja WHERE pabuja_id = '$id'";
		$result = mysqli_query($db->connection, $query);
		if ($result) {
			return true;
		}else{
			return false;
		}
}

		//DELETE Cart 


	public function delete_cart($id){
			global $db;
			$query = "DELETE FROM cart WHERE customer_id = '$id'";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				return true;
			}else{
				return false;
			}
	}




		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //DELETE PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++




		// FETCH CUSTOMER

		public function fetch_allcustomer(){
			global $db;
			$query = "SELECT * FROM customer";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}



		// View SPECIFIC ADMIN


		public function fetch_admin_id($admin_id){
			global $db;
			$query = "SELECT * FROM admin WHERE admin_id = '$admin_id'";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}


		// Set Message

	public function setMessage($msg){

		if (!empty($msg)) {
			
			$_SESSION['message'] = $msg;
		}else{

			$msg = "";
		}
	}

	public function showMessage(){

		if (isset($_SESSION['message'])) {
			
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}

	}


// admin login

	public function adminLogin(){
		global $db;

		if (isset($_POST['login'])) {
			
			$_SESSION['email'] = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);
		

		$query = "SELECT * from admin WHERE email = '".$_SESSION['email']."' && password = '$password'";
		$stmt = mysqli_query($db->connection, $query);
		if (mysqli_num_rows($stmt)> 0) {
			while ($row = mysqli_fetch_array($stmt)) {
				$_SESSION['dbemail'] = $row["email"];
				$dbpassword = $row["password"];
				$_SESSION['username'] = $row["username"];
				$_SESSION['fullname'] = $row["fullname"];
				$_SESSION['pics'] = $row["pics"];

			}

			
			if ($_SESSION['email'] = $_SESSION['dbemail'] && $password = $dbpassword) {
				header("location:adminpage.php");
				$this->setMessage('<div class="alert alert-success text-center fa fa-info col-sm-12"> Success</div>');
				
				
			}else{

				$this->setMessage('<div class="alert alert-danger text-center fa fa-info col-sm-12"> Incorrect Password</div>');
		 		
			}

		}}
	}
	

		
		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //MAKE PAYMENT//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

		public function payment(){
			global $db;
			if (isset($_POST['make_payment'])) {
				
				$no_plot = $db->check($_POST['no_plot']);
				$payment_type = $db->check($_POST['payment_type']);
				$amount = $db->check($_POST['amount']);
				$complete_amount = $db->check($_POST['complete_amount']);

				
			
				$this->calculate($amount,$no_plot,$payment_type,$complete_amount);
			}
		}


		public function calculate($amount,$no_plot,$payment_type,$complete_amount){

			switch ($payment_type) {
				case 'Installmental':

				$payment_count = '2';
				if ($this->make_payment($amount,$no_plot,$payment_type,$payment_count,$complete_amount)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Admin Updated Sucessfully</div>");
			 		header("location:payment.php");
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
				
					# code...
					break;
				
				default:

				$payment_count = '0';
				if ($this->make_payment($amount,$no_plot,$payment_type,$payment_count,$complete_amount)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Admin Updated Sucessfully</div>");
			 		header("location:payment.php");
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}
					# code...
					break;
			}

		}

		
		public function make_payment($c,$d,$e,$f,$g){
		global $db;
        $TransactionID =  mt_rand(10000,99999); 
        $_SESSION['TransactionID']=$TransactionID;
        $status = 'Pending';
		$query = "INSERT INTO payment (transaction_id,customer_id,pabuja_id,fname,lname,oname,phone,email,amount,number_plot,payment_type,payment_count,status,amount_payable) VALUES('".$_SESSION['TransactionID']."','".$_SESSION['user_id']."','".$_SESSION['property_id']."','".$_SESSION['fname']."','".$_SESSION['lname']."','".$_SESSION['oname']."','".$_SESSION['phone']."','".$_SESSION['emaill']."','$c','$d','$e','$f','$status','$g')";
		$result = mysqli_query($db->connection, $query);

		return $result;
	}


	public function fetch_payment($transaction_id){
			global $db;
			$query = "SELECT * FROM payment WHERE transaction_id = '$transaction_id'";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}


		// MAKE SECONFD INSTALLMENTAL PAYMENT


		public function make_payment2($transaction_id,$cid,$p_id,$fname,$lname,$oname,$phone,$email,$no_plot,$payment_type,$payment_count,$status,$amount_payable){


			global $db;
			$query = "SELECT * FROM percentage";
			$result = mysqli_query ($db->connection, $query);
			while ($row = mysqli_fetch_array($result)) {
			# code...
			$fifty = $row["first_payment"];
			$thirty = $row["second_payment"];
			$twenty = $row["last_payment"];

			}


		if ($payment_count == "2") {
			$amount =  $amount_payable * $thirty; 
        	$p_count = 1;

        		$query = "INSERT INTO payment (transaction_id,customer_id,pabuja_id,fname,lname,oname,phone,email,amount,number_plot,payment_type,payment_count,status,amount_payable) VALUES('$transaction_id','$cid','$p_id','$fname','$lname','$oname','$phone','$email','$amount','$no_plot','$payment_type','$p_count','$status','$amount_payable')";
		$result = mysqli_query($db->connection, $query);

		return $result;
		}elseif ($payment_count == "1") {
			$amount =  $amount_payable * $twenty; 
        	$pay_count = 0;

        		$query = "INSERT INTO payment (transaction_id,customer_id,pabuja_id,fname,lname,oname,phone,email,amount,number_plot,payment_type,payment_count,status,amount_payable) VALUES('$transaction_id','$cid','$p_id','$fname','$lname','$oname','$phone','$email','$amount','$no_plot','$payment_type','$pay_count','$status','$amount_payable')";
		$result = mysqli_query($db->connection, $query);
		$this->complete_installmental($transaction_id, $payment_count);
		return $result;
		}else{

		}

        // switch ($payment_count) {
        // 	case '2':
        // 	$amount =  $amount_payable * 0.3; 
        // 	$payment_count = 1;
        // 		# code...
        // 		break;

        // 		case '1':
        // 	$amount =  $amount_payable * 0.2; 
        // 	$payment_count = 0;
        // 		# code...
        // 		break;
        	
        // 	default:
        // 	$amount =  ""; 
        // 	$payment_count = "";
        // 		break;
        // }
	
	}

	public function complete_installmental($transaction_id, $payment_count){

		if (mysqli_num_rows($this->fetch_installmental($transaction_id, $payment_count)) == true) {
			$query = "UPDATE payment SET complete_balance='1' WHERE transaction_id='$transaction_id'";
	        $result = mysqli_query($this->connection, $query);
	        return $result;
			# code...
		}else{

		}
    }



    public function fetch_installmental($transaction_id, $payment_count){
			global $db;
			$query = "SELECT * FROM payment WHERE transaction_id = '$transaction_id' AND payment_count='0'";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}



		    //Updating Record
    public function updPlot($TransID){

    	$data = $this->fetch_pay($TransID);

    	$data2 = $this->fetch_pay2($TransID);

    	$new_plot = $data["available_plot"] - $data2["number_plot"];

        $query = "UPDATE property_abuja SET available_plot='$new_plot' WHERE transaction_id='$TransID'";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }


    public function fetch_pay($TransID){
			global $db;
			$query = "SELECT * FROM payment 
			LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
			WHERE transaction_id = '$TransID'";
			$result = mysqli_query($db->connection, $query);
			$res = mysqli_fetch_array($result);
			return $res;
		}

	public function fetch_pay2($TransID){
			global $db;
			$query = "SELECT * FROM payment WHERE transaction_id = '$TransID'";
			$result = mysqli_query($db->connection, $query);
    		$res2 = mysqli_fetch_array($result);
			return $res2;
		}



	public function fetch_payment2($transaction_id){
			global $db;
			$query = "SELECT * FROM payment WHERE transaction_id = '$transaction_id'";
			$result = mysqli_query($db->connection, $query);
			return $result;
		}

		//


	 //Checking Applicant info to generate RRR 
    public function CheckAppData($transid){

        $query = "SELECT * FROM payment WHERE transaction_id='$transid' AND reference='' AND status='Pending' AND order_id='' ";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }

       //Updating Record
    public function updPaymentInvoice($TransID,$rrr,$orderID){

        $query = "UPDATE payment SET reference='$rrr', order_id='$orderID' WHERE transaction_id='$TransID'";
        $result = mysqli_query($this->connection, $query);
         // return $result;
    }


     public function updAppOnlinePayment($bank,$rrr,$orderID){
            $date_paid = date('Y-m-d h:m:s');
        $query = "UPDATE payment SET date_paid='$date_paid', status='Success', payment_method='$bank' WHERE reference='$rrr' AND order_id='$orderID'";
        $result = mysqli_query($this->connection, $query);
         return $result;
    }

    public function fetchPaymentInvoice($rrr){

        $query = "SELECT * FROM payment WHERE  reference='$rrr'";
        $result = mysqli_query($this->connection, $query);
        return $result;
    }


    public function getPaymentReceipt($RRR){

         $query = "SELECT * FROM payment 
         LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
         WHERE reference='$RRR'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }


    public function getPaymentInvoice($email){

         $query = "SELECT * FROM payment 
         LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
         WHERE email='$email' AND status = 'Success'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }

    //

     public function fetchgetPaymentInvoice($email, $TransID){

         $query = "SELECT SUM(amount) FROM payment 
         LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
         WHERE email='$email' AND status = 'Success' AND transaction_id='$TransID'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }

    //

    public function getPaymentInvoice2($email){

         $query = "SELECT * FROM payment WHERE email='$email' ORDER By payment_id DESC";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }


    //


     public function customer_controll_access(){

        if (!isset($_SESSION['emaill'])) {
            
            header("location: ../customer_login.php");
        }else{


        }
    }


     public function admin_controll_access(){

        if (!isset($_SESSION['emaill'])) {
            
            header("location: ../admin-login.php");
        }else{


        }
    }

     public function marketer_controll_access(){

        if (!isset($_SESSION['email'])) {
            
            header("location: ../marketer-login.php");
        }else{


        }
    }


    public function accountant_controll_access(){

        if (!isset($_SESSION['email'])) {
            
            header("location: ../accountant-login.php");
        }else{


        }
    }


     public function getPaymentInvoiceAll(){

         $query = "SELECT * FROM payment 
         LEFT JOIN property_abuja on property_abuja.pabuja_id = payment.pabuja_id
         WHERE status = 'Success'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }

    //

      public function getPropertyPrice($id){

         $query = "SELECT * FROM property_abuja WHERE pabuja_id='$id'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }


    public function viewCart($user_id){

         $query = "SELECT * FROM cart 
         LEFT JOIN property_abuja on property_abuja.pabuja_id = cart.pabuja_id
         WHERE customer_id = '$user_id'";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }


    public function viewallCart(){

         $query = "SELECT * FROM cart LEFT JOIN property_abuja on property_abuja.pabuja_id = cart.pabuja_id";
         $result = mysqli_query($this->connection, $query);
         return $result;
    }

	


		//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //MAKE PAYMENT//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	// COUNT ADMIN

	public function countAdmin(){
		global $db;
		$query = "SELECT count(admin_id) FROM admin";
		$result = mysqli_query($db->connection, $query);

		return $result;
	}

	//

	public function count_cart(){
		global $db;
		$query = "SELECT count(cart_id) FROM cart WHERE cart_email = '".$_SESSION['emaill']."'";
		$result = mysqli_query($db->connection, $query);

		return $result;
	}


	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //DELETE PROPERTY//
//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

	public function btn_operation(){
		if (isset($_POST['btn-make-payment'])) {
			$_SESSION['property_id'] = $_POST['btn-make-payment'];
			header("location: make-payment.php");
		}
	}

	// ADD TO CART

	public function insert_cart($a,$b,$c,$d,$e,$f,$g){
			global $db;
			$query = "INSERT INTO cart(customer_id,pabuja_id,cart_fname,cart_lname,cart_oname,cart_email,cart_phone,cart_amount,number_plot) VALUES ('".$_SESSION['user_id']."','".$_SESSION['property_id']."','$a','$b','$c','$d','$e','$f','$g')";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				?>
				<script type="text/javascript">
	              setTimeout(() => window.location.href = "view-cart.php", 2000);
	            </script>
             <?php
                           

				return true;
			}else{
				return false;
			}


	}

	
}


?>