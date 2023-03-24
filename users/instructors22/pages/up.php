<?php
    
    if (isset($_POST['submit'])) {
    	
    	$file = $_FILES['docs'];

    	$fileName = $_FILES['docs']['name'];
    	$fileTmpName = $_FILES['docs']['tmp_name'];
    	$fileSize = $_FILES['docs']['size'];
    	$fileError = $_FILES['docs']['error'];
    	$fileType = $_FILES['docs']['type'];

    	$fileExt = explode('.', $fileName);
    	$fileActualExt = strtolower(end($fileExt));

    	$allowed = array('pdf');
    	if (in_array($fileActualExt, $allowed)) {
    		
    		if ($fileError === 0) {
    			if ($fileSize < 10000000000) {
    				$fileNameNew = uniqid('', true).".".$fileActualExt;

    				$fileDestination = 'documents/'.$fileNameNew;
    				move_uploaded_file($fileTmpName, $fileDestination);

    				header('Location: uploads.php?uploadsuccess');
    			} else {
    				echo "File too large";
    			}
    		} else {
    			echo "Error uploading files";
    		}
    	} else {
    		echo "You can't upload files of these type";
    	}

        $sql = "INSERT INTO files(title,docs) VALUES('$title','$pname')";

   if (mysqli_query($dbconnect,$sql)) {
    
    echo "File Succeddfully Uploaded";
   } else {

    echo "Error";
   }
    }


?>