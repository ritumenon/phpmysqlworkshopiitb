<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="q2_string_functions.php">
		<input type="text" name="string" placeholder="Enter your string">
		<input type="submit" name="submit" value="submit">
	</form>
	<?php

		if(isset($_POST['submit'])){
			$str = $_POST['string'];
			echo "<br>";
			echo "The string has " .strlen($str). " characters";
			echo "<br><br>";
			echo "String broken down into array is represented as: <br>";
			$arr_str = explode(" ", $str);
			foreach ($arr_str as $as) {
				echo $as;
				echo "<br>" ;
			}
			echo "<br>";
			echo "On reversing the string, we obtain the following result: ".strrev($str);
			echo "<br><br>";
			echo "On converting the alphabetical characters to lower case: ".strtolower($str);
			echo "<br><br>";
			echo "On converting the alphabetical characters to upper case: ".strtoupper($str);
			echo "<br><br>";
			echo "Replacing content of the substring to newly declared substring";
			$new_str = "Replaced";
			echo "The new substring is ".$new_str;
			echo "<br><br>";
			echo "New string ".substr_replace($str, $new_str,strlen($str)/2);

		}

	?>	
</body>
</html>