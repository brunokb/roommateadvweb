<?php

	include 'config.php';
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);

	if (isset($_POST["btn_upload"]) == "Upload")
	{
		$uploadOk = 1;

		$file_tmp1 = $_FILES["fileImg1"]["tmp_name"];
		$file_tmp2 = $_FILES["fileImg2"]["tmp_name"];
		$file_tmp3 = $_FILES["fileImg3"]["tmp_name"];
		$file_tmp4 = $_FILES["fileImg4"]["tmp_name"];
		$file_tmp5 = $_FILES["fileImg5"]["tmp_name"];
		$file_name1 = $_FILES["fileImg1"]["name"];
		$file_name2 = $_FILES["fileImg2"]["name"];
		$file_name3 = $_FILES["fileImg3"]["name"];
		$file_name4 = $_FILES["fileImg4"]["name"];
		$file_name5 = $_FILES["fileImg5"]["name"];

		$room_descrip = $_POST["roomDescription"];
		$room_cap = $_POST["capacitySelect"];
		$room_price = $_POST["roomPrice"];
		$room_city = $_POST["roomCity"];
		$room_address = $_POST["roomAddress"];
		
		//image directory where actual image will be store
		$file_path1 = "images/".$file_name1;
		$file_path2 = "images/".$file_name2;
		$file_path3 = "images/".$file_name3;
		$file_path4 = "images/".$file_name4;
		$file_path5 = "images/".$file_name5;

		$target_file1 = $file_path1 . basename($file_name1);	
		$target_file2 = $file_path2 . basename($file_name2);	
		$target_file3 = $file_path3 . basename($file_name3);	
		$target_file4 = $file_path4 . basename($file_name4);	
		$target_file5 = $file_path5 . basename($file_name5);	
		
		
		$image_name1 = rand().".PNG";
		$image_name2 = rand().".PNG";
		$image_name3 = rand().".PNG";
		$image_name4 = rand().".PNG";
		$image_name5 = rand().".PNG";


		mysqli_query($conn,"INSERT INTO room(address,city,description,price,refID,capac) VALUES('$room_address','$room_city','$room_descrip','$room_price',0,'$room_cap')") or die ("image not inserted". mysqli_error());
		$last_id = mysqli_insert_id($conn);
		mysqli_query($conn,"UPDATE room SET refID='$last_id' WHERE roomID='$last_id'");
		
		if(file_exists($file_path1))
		{
			$error = "Sorry,The <b>".$file_name."</b> image already exist.";
			$uploadOk = 0;
		}
			else
			{	
				echo $image_name1.$file_path1.$last_id;
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref) VALUES('$image_name1','$file_path1','$last_id')") or die ("1image not inserted". mysqli_error());
				move_uploaded_file($file_tmp1,$file_path1);
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref) VALUES('$image_name2','$file_path2','$last_id')") or die ("2image not inserted". mysqli_error());
				move_uploaded_file($file_tmp2,$file_path2);
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref) VALUES('$image_name3','$file_path3','$last_id')") or die ("i3mage not inserted". mysqli_error());
				move_uploaded_file($file_tmp3,$file_path3);
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref) VALUES('$image_name4','$file_path4','$last_id')") or die ("i4mage not inserted". mysqli_error());
				move_uploaded_file($file_tmp4,$file_path4);
				mysqli_query($conn,"INSERT INTO imageStore(img_name,img_path,image_ref) VALUES('$image_name5','$file_path5','$last_id')") or die ("i5mage not inserted". mysqli_error());
				move_uploaded_file($file_tmp5,$file_path5);
			}
		
	}
?>