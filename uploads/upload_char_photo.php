<?php
include '../lib/log_check.php';

$target_dir = "../zdjecia_pos/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


// $target_dir = "../zdjecia_pos/"; 
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// // Check if image file is a actual image or fake image
// if(isset($_POST["file_submit"])) {
// 	$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
// 	if($check !== false) {
// 		echo "Plik jest zdjęciem - " . $check["mime"] . ".";
// 	} else {
// 		$_SESSION['upload_error'] = "Plik nie jest zdjęciem.";
// 		header('../i_data_edit.php');
// 		exit;
// 	}
// }
// // Check if file already exists
// if (file_exists($target_file)) {
// 	$_SESSION['upload_error'] = "Plik juz istnieje.";
// 	header('../i_data_edit.php');
// 	exit;
// }
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 1500000) {
// 	$_SESSION['upload_error'] = "Plik jest za duży.";
// 	header('../edition/i_data_edit.php');
// 	exit;
// }
// // Allow certain file formats
// if($imageFileType != "png" || $imageFileType != "gif" ) {
// 	$_SESSION['upload_error'] = "Tylko formaty, PNG & GIF są dopuszczone.";
// 	header('../edition/i_data_edit.php');
// 	exit;
// }

// if everything is ok, try to upload file
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		$_SESSION['upload_error'] = "Plik ". basename( $_FILES["fileToUpload"]["name"]). " został wysłany.";
		header('../edition/i_data_edit.php');
		exit;
	} else {
		$_SESSION['upload_error'] = "Wybacz, nastąpił błąd przy wysyłaniu.";
		header('../edition/i_data_edit.php');
		exit;
	}

/*
$editQuery = $db->prepare("UPDATE characters SET photo=:photo WHERE u_id=:character_id");
$editQuery->bindValue(':photo', $target_file2 , PDO::PARAM_STR);
$editQuery->bindValue(':character_id', $_SESSION["character_id"], PDO::PARAM_STR);
$editQuery->execute();
header('refresh: 1; url=../edition/edition.php');
*/
?>