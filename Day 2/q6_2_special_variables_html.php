<!DOCTYPE html>
<html>
<head>
	<title>Specaial Variables_2</title>
</head>
<body>
	<form method='POST' action='q6_2_special_variables_html.php'>
		<input type="text" name="name" placeholder="Enter your name"><br><br>
		<input type="int" name="sub1" placeholder="Enter marks in Subject 1"><br><br>
		<input type="int" name="sub2" placeholder="Enter marks in Subject 2"><br><br>
		<input type="int" name="sub3" placeholder="Enter marks in Subject 3"><br><br>
		<input type="int" name="sub4" placeholder="Enter marks in Subject 4"><br><br>
		<input type="int" name="sub5" placeholder="Enter marks in Subject 5"><br><br>
		<input type="submit" name="submit">

	</form>

	<?php

		if(isset($_POST['submit']))
		{
			$name = $_POST['name'];
			$sub1 = $_POST['sub1'];
			$sub2 = $_POST['sub2'];
			$sub3 = $_POST['sub3'];
			$sub4 = $_POST['sub4'];
			$sub5 = $_POST['sub5'];
			$total = $sub1+$sub2+$sub3+$sub4+$sub5;
			$percent = ($total/500)*100;

			echo "Name of Student: ".$name. "<br>";
			echo "Marks in Each Subject <br>";
			echo "Subject 1: ".$sub1. "<br>";
			echo "Subject 2: ".$sub2. "<br>";
			echo "Subject 3: ".$sub3. "<br>";
			echo "Subject 4: ".$sub4. "<br>";
			echo "Subject 5: ".$sub5. "<br>";

			echo "Total Marks Obtained: <br>";
			echo "Total Marks: ".$total. "<br>";
			echo "Percentage: ".$percent;

		}
	?>
</body>
</html>