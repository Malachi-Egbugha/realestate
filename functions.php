<?php  

/**
 * 
 */

$db = new Config();


class Estate extends Config{

	// Inserting Recored into DB

	public function add_Customer(){
		global $db;

		if (isset($_POST['btn_submit'])){

			$fname = $db->check($_POST['fname']);
			$lname = $db->check($_POST['lname']);
			$oname = $db->check($_POST['oname']);
			$gender = $db->check($_POST['gender']);
			$address = $db->check($_POST['address']);
			$email = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);
		   	
		   	$query2 = "SELECT * FROM customer WHERE email = '$email'";
			$result2 = mysqli_query($db->connection, $query2);
			$sql=mysqli_num_rows($result2);

				if ($sql>0) {

					$this->setMessage("<div class='alert alert-danger text-center'> Email already Exist !!!</div>");

				}else{


			if ($this->insert_customer($fname,$lname,$oname,$gender,$address,$email,$password)) {
				$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Customer Registered Sucessfully</div>");
		 		
			}else{
				$this->setMessage("<div class='alert alert-danger'>Failed</div>");
			}}

		}
	}	

		function insert_customer($a,$b,$c,$d,$e,$f,$g){
			global $db;
			$query = "INSERT INTO customer(fname,lname,oname,gender,address,email,password) VALUES('$a','$b','$c','$d','$e','$f','$g')";
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

		// DELETE DOCTOR RECORD 

		public function delete_Record_Doctor($user_id){
			global $db;
			$query = "DELETE FROM doctor WHERE doctor_id = '$user_id'";
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
			if (isset($_POST['btn_submit'])) {

				move_uploaded_file($_FILES["pics"]["tmp_name"],"images/" . $_FILES["pics"]["name"]);      
				$location=$db->check($_FILES["pics"]["name"]);
				$fullname = $db->check($_POST['fullname']);
				$email = $db->check($_POST['email']);
				$phone = $db->check($_POST['phone']);
				$gender = $db->check($_POST['gender']);
				$username = $db->check($_POST['username']);
				$password = $db->check($_POST['password']);

				$query2 = "SELECT * FROM admin WHERE email = '$email'";
				$result2 = mysqli_query($db->connection, $query2);
				$sql=mysqli_num_rows($result2);

					if ($sql>0) {

						$this->setMessage("<div class='alert alert-danger text-center'> Admin already exist !!!</div>");

					}else{

				if ($this->insert_admin($fullname,$email,$phone,$gender,$username,$password,$location)) {
					$this->setMessage("<div class='alert alert-success text-center col-sm-12'>Admin Sucessfully Registered</div>");
			 		
				}else{
					$this->setMessage("<div class='alert alert-danger'>Failed</div>");
				}}
			}
		}

		public function insert_admin($a,$b,$c,$d,$e,$f,$g){
			global $db;
			$query = "INSERT INTO admin (fullname, email, phone, gender, username, password, pics) VALUES ('$a','$b','$c','$d','$e','$f','$g')";
			$result = mysqli_query($db->connection, $query);
			if ($result) {
				
				return true;

			}else{

				return false;
			}


		}

		// FETCH ADMIN

		public function fetch_Admin(){
			global $db;
			$query = "SELECT * FROM admin";
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
			
			$email = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);
		

		$query = "SELECT * from admin WHERE email = '$email' && password = '$password'";
		$stmt = mysqli_query($db->connection, $query);
		if (mysqli_num_rows($stmt)> 0) {
			while ($row = mysqli_fetch_array($stmt)) {
				$dbemail = $row["email"];
				$dbpassword = $row["password"];
				$_SESSION['firstname'] = $row["firstname"];
				$_SESSION['lastname'] = $row["lastname"];
				$_SESSION['othernames'] = $row["othernames"];
				$_SESSION['user_id'] = $row["admin_id"];
				$_SESSION['emaill'] = $row["email"];

			}
			
			if ($email = $dbemail && $password = $dbpassword) {
				header("location:Dashboard/adminpage.php");
				$this->setMessage('<div class="alert alert-success text-center fa fa-info col-sm-12"> Success</div>');
				
				
			}else{

				$this->setMessage('<div class="alert alert-danger text-center fa fa-info col-sm-12"> Incorrect Password</div>');
		 		
			}

		}}
	}

		// CUSTOMER LOGIN 

	public function customerLogin(){
		global $db;

		if (isset($_POST['btn_login'])) {
			
			$email = $db->check($_POST['emaill']);
			$password = $db->check($_POST['password']);
		

		$query = "SELECT * from customer WHERE email = '$email' && password = '$password'";
		$stmt = mysqli_query($db->connection, $query);
		if (mysqli_num_rows($stmt)> 0) {
			while ($row = mysqli_fetch_array($stmt)) {
				$dbemail = $row["email"];
				$dbpassword = $row["password"];
				$_SESSION['fname'] = $row["fname"];
				$_SESSION['lname'] = $row["lname"];
				$_SESSION['oname'] = $row["oname"];
				$_SESSION['user_id'] = $row["customer_id"];
				$_SESSION['emaill'] = $row["email"];
				$_SESSION['phone'] = $row["phone"];

			}
			
			if ($emaill = $dbemail && $password = $dbpassword) {
				header("location:Dashboard/index.php");
				$this->setMessage('<div class="alert alert-success text-center fa fa-info col-sm-12"> Success</div>');
				
				
			}else{

				$this->setMessage('<div class="alert alert-danger text-center fa fa-info col-sm-12"> Incorrect Password</div>');
		 		
			}

		}}
	}


	// MARKETER LOGIN

	public function marketerLogin(){
		global $db;

		if (isset($_POST['login-marketer'])) {
			
			$email = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);

		$query = "SELECT * from marketer WHERE email = '$email' && password = '$password'";
		$stmt = mysqli_query($db->connection, $query);
		if (mysqli_num_rows($stmt)> 0) {
			while ($row = mysqli_fetch_array($stmt)) {
				$dbemail = $row["email"];
				$dbpassword = $row["password"];
				$_SESSION['firstname'] = $row["firstname"];
				$_SESSION['lastname'] = $row["lastname"];
				$_SESSION['othernames'] = $row["othernames"];
				$_SESSION['user_id'] = $row["admin_id"];
				$_SESSION['email'] = $row["email"];


			}
			
			if ($emaill = $dbemail && $password = $dbpassword) {
				header("location:Dashboard/marketer.php");
				$this->setMessage('<div class="alert alert-success text-center fa fa-info col-sm-12"> Success</div>');
				
				
			}else{

				$this->setMessage('<div class="alert alert-danger text-center fa fa-info col-sm-12"> Incorrect Password</div>');
		 		
			}

		}}
	}


	// ACCOUNTANT LOGIN

	public function accountantLogin(){
		global $db;

		if (isset($_POST['login-accountant'])) {
			
			$email = $db->check($_POST['email']);
			$password = $db->check($_POST['password']);

		$query = "SELECT * from accountant WHERE email = '$email' && password = '$password'";
		$stmt = mysqli_query($db->connection, $query);
		if (mysqli_num_rows($stmt)> 0) {
			while ($row = mysqli_fetch_array($stmt)) {
				$dbemail = $row["email"];
				$dbpassword = $row["password"];
				$_SESSION['firstname'] = $row["firstname"];
				$_SESSION['lastname'] = $row["lastname"];
				$_SESSION['othernames'] = $row["othernames"];
				$_SESSION['user_id'] = $row["admin_id"];
				$_SESSION['email'] = $row["email"];

			}
			
			if ($emaill = $dbemail && $password = $dbpassword) {
				header("location:Dashboard/accountant.php");
				$this->setMessage('<div class="alert alert-success text-center fa fa-info col-sm-12"> Success</div>');
				
				
			}else{

				$this->setMessage('<div class="alert alert-danger text-center fa fa-info col-sm-12"> Incorrect Password</div>');
		 		
			}

		}}
	}



	// COUNT ADMIN

	public function countAdmin(){
		global $db;
		$query = "SELECT count(admin_id) FROM admin";
		$result = mysqli_query($db->connection, $query);

		return $result;
	}

	
	public function property_index(){
		global $db;
		$query = "SELECT * FROM property_abuja LIMIT 8";
		$result = mysqli_query ($db->connection, $query);
		return $result;
	}

	//+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                                                 //MANAGE PROPERTY//
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



public function btn_operation(){
	if (isset($_POST['btn-make-payment'])) {
		$_SESSION['property_id'] = $_POST['btn-make-payment'];
		header("location: make-payment.php");
	}
}

public function count_cart(){
	global $db;
	$query = "SELECT count(cart_id) FROM cart WHERE cart_email = '".$_SESSION['emaill']."'";
	$result = mysqli_query($db->connection, $query);

	return $result;
}
	
}


?>