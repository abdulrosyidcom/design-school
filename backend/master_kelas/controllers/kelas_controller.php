<?php
// define calss for user
class kelas_controller {
	// save user
    public static function store_kelas() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array

	   	if (!empty($_FILES["icon"]["name"])) {
	    	$target_dir = "../../uploads/";
			$target_file = $target_dir . basename($_FILES["icon"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check file size
			if ($_FILES["icon"]["size"] > 500000) {
			    $_SESSION['failure'] = "Ukuran file anda terlalu besar";
			    header('location: add_kelas.php');
		    	exit();
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    $_SESSION['failure'] = "File yang anda upload bukan gambar";
			    header('location: add_kelas.php');
		    	exit();
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$_SESSION['failure'] = "Sorry, file anda gagal di upload.";
			    header('location: add_kelas.php');
		    	exit();
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
			    	$_SESSION['success'] = "The file ". basename( $_FILES["icon"]["name"]). " has been uploaded.";
			    } else {
			        $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
				    header('location: add_kelas.php');
			    	exit();
			    }
			}

			$data_to_store['icon'] = $_FILES["icon"]["name"];
	    }


	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    
	  
	    $last_id = $db->insert ('master_kelas', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Kelas added successfully!";
	    	header('location: index.php');
	    	exit();
	    }  
    }

    // fungsi edit 
    public static function edit_kelas(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);

    	if (!empty($_FILES["icon"]["name"])) {
	    	$target_dir = "../../uploads/";
			$target_file = $target_dir . basename($_FILES["icon"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check file size
			if ($_FILES["icon"]["size"] > 500000) {
			    $_SESSION['failure'] = "Ukuran file anda terlalu besar";
			    header('location: index.php');
		    	exit();
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    $_SESSION['failure'] = "File yang anda upload bukan gambar";
			    header('location: index.php');
		    	exit();
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$_SESSION['failure'] = "Sorry, file anda gagal di upload.";
			    header('location: index.php');
		    	exit();
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["icon"]["tmp_name"], $target_file)) {
			    	$_SESSION['success'] = "The file ". basename( $_FILES["icon"]["name"]). " has been uploaded.";
			    } else {
			        $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
				    header('location: index.php');
			    	exit();
			    }
			}

			$data_to_update['icon'] = $_FILES["icon"]["name"];
	    }


   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $kelas_id=  filter_input(INPUT_GET, 'kelas_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$kelas_id);
	    $stat = $db->update ('master_kelas', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Kelas has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update kelas";
	    }

	    header('location: index.php');
    }


    // delete user
    public static function delete_kelas($delete_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_id) {
		    
		    $db->where('id', $delete_id);
		    $stat = $db->delete('master_kelas');
		    if ($stat) {
		        $_SESSION['info'] = "Kelas deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }


    // funsgi untuk menjalankan perintah save item kelas
    public static function store_kelas_item() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    
	  
	    $last_id = $db->insert ('class_item', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Item added successfully!";
	    	header('location: index.php');
	    	exit();
	    }  
    }


    // fungsi edit 
    public static function edit_kelas_item(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $item_id=  filter_input(INPUT_GET, 'item_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$item_id);
	    $stat = $db->update ('class_item', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Item has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update  Item";
	    }

	    header('location: index.php');
    }

    public static function delete_kelas_item($delete_item_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_item_id) {
		    
		    $db->where('id', $delete_item_id);
		    $stat = $db->delete('class_item');
		    if ($stat) {
		        $_SESSION['info'] = "Item deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }



}

