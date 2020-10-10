<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method = "POST" action = "q3_file_upload.php" enctype="multipart/form-data">
		<input type = "file" name = "fileName">
		<input type = "submit" name = "submit" value = "submit">
	</form>


 <?php

if(isset($_POST['submit']))
{
    $fileName = $_FILES['fileName']['name'];
    $tempName = $_FILES['fileName']['tmp_name'];
    
    if(isset($fileName))
    {
        if(!empty($fileName))
        {
            $location = "files/";
            if(move_uploaded_file($tempName, $location.$fileName))
            {
                echo 'File is uploaded successfully';
            }
        }
    }
}

?>
</body>
</html>