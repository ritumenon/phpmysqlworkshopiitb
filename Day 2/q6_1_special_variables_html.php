<!DOCTYPE html>
<html>
<head>
	<title>Specaial Variables_1</title>
</head>
<body>
	<form method="GET" action="q6_1_special_variables_html.php">
		<input type='text' name='first_side' placeholder='Enter first side'><br><br>
		<input type='text' name='second_side' placeholder='Enter second side'><br><br>
		<input type='text' name='third_side' placeholder='Enter third side'><br><br>
		<input type="submit" name="submit">
	</form>

	<?php
		if(isset($_GET['submit']))
		{
			$first_side = $_GET['first_side'];
			$second_side = $_GET['second_side'];
			$third_side = $_GET['third_side'];

			if($first_side==$second_side && $second_side==$third_side)
			{
				echo "Triangle formed is equilateral.";
			}	
			else if($first_side==$second_side or $second_side==$third_side or $first_side==$third_side)
			{
				echo "Triangle formed is isosceles.";
			}
			else if($first_side*$first_side = $second_side*$second_side + $third_side*$third_side || $second_side*$second_side = $first_side*$first_side + $third_side*$third_side || $third_side*$third_side = $first_side*$first_side + $second_side*$second_side)
			{
				echo "Triangle formed is right angled triangle.";
			}		
			else
			{
				echo "Triangle formed is scalene.";
			}	
		}	
	?>
</body>
</html>