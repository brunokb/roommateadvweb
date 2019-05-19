<?php

	$dbname = 'id9561485_roommateadvweb';
	$dbuser = 'id9561485_6931';
	$dbpass = 'ait1234@!';
	$dbhost = 'localhost';
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$uploadOk = 1;

		$file_tmp = $_FILES["fileImg"]["tmp_name"];
		$file_name = $_FILES["fileImg"]["name"];

		/*image name variable that you will insert in database ---*/
		$image_name = $_POST["img-name"];
		$image_ref = $_POST["img-ref"];

		//image directory where actual image will be store
		$file_path = "images/".$file_name;

		$target_file = $file_path . basename($file_name);	

	if($image_name == "")
	{
		$error = "Please enter Image name.";
	}
	else
	{
		if(file_exists($file_path))
		{
			$error = "Sorry,The <b>".$file_name."</b> image already exist.";
			$uploadOk = 0;
		}
			else
			{
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref)
				VALUES('$image_name','$file_path','$image_ref')") or die ("image not inserted". mysqli_error());
				move_uploaded_file($file_tmp,$file_path);
				$error = "<p align=center>File ".$_FILES["fileImg"]["name"].""."<br />Image saved into Table.";
			}
		}
	}
?>