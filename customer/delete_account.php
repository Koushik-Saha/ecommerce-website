

<br>

<h2 style="text-align: center; ">Do You really want to DELETE yout account?</h2>

<form action="" method="post">
	
	<br>
	<input type="submit" name="yes" value="Yes I Want" />
	<input type="submit" name="no" value="No I was Joking" />
</form>

<?php 
include("includes/db.php");

	$user = $_SESSION['customer_email'];

	if (isset($_POST['yes'])) {
		
		$delete_customer = " delete from customers where customer_email='$user'";

		$run_customer = mysqli_query($con, $delete_customer);

		echo "<script>alert('We are really Sorry, yoer account has been deleted! ')</script>";

		echo "<script>window.open('../index.php','_self')</script>";

	}

	if (isset($_POST['no'])){

		echo "<script>alert('No Joke Again =D ')</script>";

		echo "<script>window.open('my_account.php','_self')</script>";
	}
?>