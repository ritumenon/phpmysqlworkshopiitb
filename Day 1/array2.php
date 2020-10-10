<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method = "POST" action = "array2.php" enctype="multipart/form-data">
		<input type = "file" name = "file">
		<input type = "submit" name = "submit" value = "submit">
	</form>


	<?php
		if(isset($_POST['submit'])){
			$name 		=	$_FILES['file']['name'];
			$type		=	$_FILES['file']['type'];
			$size		=	$_FILES['file']['size'];
			$temp 		=	$_FILES['file']['tmp_name'];
			$error		=	$_FILES['file']['error'];

			if ($error>0)
				die("Error uploading file! Error $error");
			else{
				$uploaddir = '/uploads/';
    			$uploadfile = $uploaddir . basename($_FILES['file']['name']);

				move_uploaded_file($temp,$uploadfile);
				echo "Upload is succesful";
			}

		}



	?>
</body>
</html>