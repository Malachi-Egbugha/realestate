<?php
require_once('config/db.php');
$operation = new Estate();

if (isset($_SESSION['delete'])) {
	global $db;

	if ($operation->delete_abuja($_SESSION['delete'])) {
		$operation->setMessage("<div class = 'alert alert-danger text-center col-md-12'> Record Deleted Sucessfully !!!</div>");
		?>

		<script type="text/javascript">
			setTimeout(() => window.location.href = "manage-property.php", 2000);
		</script>
		<?php
	}else{
		$operation->setMessage("<div class = 'alert alert-danger, col-md-12, text-center'> Record Deleted Sucessfully !!!</div>");

	}
}

?>