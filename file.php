<?php

echo __FILE__ . "<br>";

echo __LINE__ . "<br>";

echo __DIR__ . "<br>";


if(file_exists(__DIR__)){
	echo "Yes" . "<br>";
}

if(file_exists(__FILE__)){
	echo "Yes" . "<br>";
}


if(is_file(__DIR__)){
	echo "Yes" . "<br>";
}
else{
	echo "no" . "<br>";
}


if(is_file(__FILE__)){
	echo "Yes" . "<br>";
}
else{
	echo "no" . "<br>";
}


if(is_dir(__FILE__)){
	echo "Yes" . "<br>";
}
else{
	echo "no" . "<br>";
}


if(is_dir(__DIR__)){
	echo "Yes" . "<br>";
}
else{
	echo "no" . "<br>";
}


echo file_exists(__FILE__) ? "yes.." : "no..";

echo file_exists(__DIR__) ? "yes.." : "no..";


if(isset($_POST['submit'])){
	// echo "<pre>";
	// print_r($_FILES['file']);
	// echo "</pre>";

	$upload_errors = array(

		UPLOAD_ERR_OK         => "There has no error",
		UPLOAD_ERR_INI_SIZE   => "The uploaded file exeeds the upload_max_file size",
		UPLOAD_ERR_FORM_SIZE  => "The uploaded file exceeds the MAX_FILE_SIZE",
		UPLOAD_ERR_PARTIAL    => "The uploaded file was only partially uploaded",
		UPLOAD_ERR_NO_FILE    => "No file was uploaded",
		UPLOAD_ERR_NO_TMP_DIR => "Missing a temporary folder",
		UPLOAD_ERR_CANT_WRITE => "Failed to write file to disk",
		UPLOAD_ERR_EXTENSION  => "A PHP extension stopped the file upload"

	);

	$temp_name = $_FILES['file']['tmp_name'];
	$the_file  = $_FILES['file']['name'];
	$directory = "images";

	if(move_uploaded_file($temp_name, $directory . "/" . $the_file)){
		$the_message = "File Uploaded successfully";
	}
	else{
		$the_error   = $_FILES['file']['error'];
		$the_message = $upload_errors[$the_error];
	}
	

	
}





?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>File</title>
	</head>
	<body>
		<form action="file.php" method="post" enctype="multipart/form-data">
			<h2>
				<?php

				if(!empty($upload_errors)){
					echo $the_message;
				}


				?>
			</h2>
			<input type="file" name="file">
			<input type="submit" name="submit">
		</form>
	</body>
</html>