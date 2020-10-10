<?php 

	require('connection.php');
	$select_query = "SELECT * FROM class1 where name = 'Rohan'";
	$execute_query = mysqli_query($conn,$select_query);
	$specs = $execute_query-> fetch_array(MYSQLI_ASSOC);
	$total	=	$specs['sub1'] + $specs['sub2'] + $specs['sub3'] + $specs['sub4'] + 99;
	$percent = ($total/500)*100;
	$update_query = "UPDATE class1 SET sub5='99',total_obtained=$total,percent=$percent WHERE name='ROHAN'";

	mysqli_query($conn,$update_query);

	if (mysqli_num_rows($execute_query)>0){
	echo "<br><br>";
	echo "Updated Details <br>";
	echo "Name: ".$specs['name']." <br>";
	echo "Subject 1 ".$specs['sub1']." <br>";
	echo "Subject 2 ".$specs['sub2']." <br>";
	echo "Subject 3 ".$specs['sub3']." <br>";
	echo "Subject 4 ".$specs['sub4']." <br>";
	echo "Subject 5 ".$specs['sub5']." <br>";
	echo "Total Marks Obtained ".$specs['total_obtained']." <br>";
	echo "Total Marks ".$specs['total_marks']." <br>";
	echo "Percentage ".$specs['percent']." <br>";
	}
	else{
		echo "Database doen't hold such record";
	}


	?>