<?php
// define calss for user
class materi_controller {
	// save user
    public static function store_materi() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    $data_to_store['author'] = $_SESSION[user_id];
	    // get kelas id
	    $db->where('id', $data_to_store['item_id']);
		$kelas = $db->getOne("class_item");
		$data_to_store['kelas_id'] = $kelas['kelas_id'];

	    $last_id = $db->insert ('class_content', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Materi added successfully!";
	    	header('location: index.php');
	    	exit();
	    }  
    }

    // fungsi edit 
    public static function edit_materi(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $materi_id=  filter_input(INPUT_GET, 'materi_id',FILTER_VALIDATE_INT);

	    $data_to_update['author'] = $_SESSION[user_id];
	    // get kelas id
	    $db->where('id', $data_to_update['item_id']);
		$kelas = $db->getOne("class_item");
		$data_to_update['kelas_id'] = $kelas['kelas_id'];


	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$materi_id);
	    $stat = $db->update ('class_content', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Materi has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Materi";
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
		        $_SESSION['info'] = "Materi deleted successfully!";
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
	    	$_SESSION['success'] = "Materi added successfully!";
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
	        $_SESSION['success'] = "Materi has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Materi";
	    }

	    header('location: index.php');
    }

    public static function delete_materi($materi_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($materi_id) {
		    
		    $db->where('id', $materi_id);
		    $stat = $db->delete('class_content');
		    if ($stat) {
		        $_SESSION['info'] = "Materi deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }



}

