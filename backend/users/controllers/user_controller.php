<?php
// define calss for user
class user_controller {
	// save user
    public static function store_user() {
	    // uploads file
	    if (!empty($_FILES["photo"]["name"])) {
	    	$target_dir = "../../uploads/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check file size
			if ($_FILES["photo"]["size"] > 500000) {
			    $_SESSION['failure'] = "Ukuran file anda terlalu besar";
			    header('location: add_users.php');
		    	exit();
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    $_SESSION['failure'] = "File yang anda upload bukan gambar";
			    header('location: add_users.php');
		    	exit();
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$_SESSION['failure'] = "Sorry, file anda gagal di upload.";
			    header('location: add_users.php');
		    	exit();
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
			    	$_SESSION['success'] = "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
			    } else {
			        $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
				    header('location: add_users.php');
			    	exit();
			    }
			}
	    }
	    //Password should be md5 encrypted
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	    // check username and email
	    $query = "SELECT * FROM users WHERE username = '".$data_to_store['username']."'";
		$username = $db->query($query);

		$query = "SELECT * FROM users WHERE email = '".$data_to_store['email']."'";
		$email = $db->query($query);

		if (!empty($username) || !empty($email)) {
			$_SESSION['failure'] = "Username atau email tidak tersedia";
		    header('location: add_users.php');
	    	exit();
		}
	    
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    $data_to_store['photo'] = $_FILES["photo"]["name"];

	    $data_to_store['password'] = md5($data_to_store['password']);
	    $last_id = $db->insert ('users', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "User added successfully!";
	    	header('location: add_users.php');
	    	exit();
	    }  
    }


    // fungsi edit 
    public static function edit_user(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
    	// uploads file
	    if (!empty($_FILES["photo"]["name"])) {
	    	$target_dir = "../../uploads/";
			$target_file = $target_dir . basename($_FILES["photo"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check file size
			if ($_FILES["photo"]["size"] > 500000) {
			    $_SESSION['failure'] = "Ukuran file anda terlalu besar";
			    header('location: add_users.php');
		    	exit();
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    $_SESSION['failure'] = "File yang anda upload bukan gambar";
			    header('location: add_users.php');
		    	exit();
			    $uploadOk = 0;
			}

			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				$_SESSION['failure'] = "Sorry, file anda gagal di upload.";
			    header('location: add_users.php');
		    	exit();
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
			    	$_SESSION['success'] = "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
			    	$data_to_update['photo'] = $_FILES["photo"]["name"];
			    } else {
			        $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
				    header('location: add_users.php');
			    	exit();
			    }
			}
	    }
	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $user_id=  filter_input(INPUT_GET, 'user_id',FILTER_VALIDATE_INT);
	    //Encrypting the password
	    if (empty($data_to_update['password'])) {
	    	unset($data_to_update['password']);
	    }else{
	    	$data_to_update['password']=md5($data_to_update['password']);
	    }
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$user_id);
	    $stat = $db->update ('users', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "User has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Admin user";
	    }

	    header('location: index.php');
    }

    // delete user
    public static function delete_user($delete_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_id) {
		    
		    $db->where('id', $delete_id);
		    $stat = $db->delete('users');
		    if ($stat) {
		        $_SESSION['info'] = "User deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }
}

