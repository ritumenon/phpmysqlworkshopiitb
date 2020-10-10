<form action="q1_md5.php" method="POST">
	Username:<input type="text" name="username"><br>
	Password:<input type="Password" name="password"><br>
	<input type="submit" name="submit" value="Submit">
</form>

<?php 
	
	if (@$_POST['submit']) {
		
		$connect = mysqli_connect("localhost","root","","data1");

		if ($connect) {
			
			$user = @$_POST['username'];
			$pass = md5(@$_POST['password']);

			$query = mysqli_query($connect , "INSERT INTO md5 VALUES('','$user','$pass')");

			echo "ThankYou <b>".$user."</b><br>Your Data was Stored Securely ";

		}
		else{
			echo "database inactive or Failed to connect";
		}
	}
 ?>