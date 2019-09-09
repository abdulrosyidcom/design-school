<?php
// define calss for user
class faq_controller {
	// save user
    public static function store_category() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    
	  
	    $last_id = $db->insert ('faq_category', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Faq Category added successfully!";
	    	header('location: index.php');
	    	exit();
	    }  
    }

    // fungsi edit 
    public static function edit_category(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $category_id=  filter_input(INPUT_GET, 'category_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$category_id);
	    $stat = $db->update ('faq_category', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Faq Category has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Faq Category";
	    }

	    header('location: index.php');
    }


    // delete user
    public static function delete_category($delete_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_id) {
		    
		    $db->where('id', $delete_id);
		    $stat = $db->delete('faq_category');
		    if ($stat) {
		        $_SESSION['info'] = "Faq Category deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }


    // funsgi untuk menjalankan perintah save item kelas
    public static function store_faq() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    
	  
	    $last_id = $db->insert ('faq', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Item added successfully!";
	    	header('location: index.php');
	    	exit();
	    }  
    }


    // fungsi edit 
    public static function edit_faq(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $item_id=  filter_input(INPUT_GET, 'item_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$item_id);
	    $stat = $db->update ('faq', $data_to_update);
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

    public static function delete_faq($delete_item_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_item_id) {
		    
		    $db->where('id', $delete_item_id);
		    $stat = $db->delete('faq');
		    if ($stat) {
		        $_SESSION['info'] = "Faq deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }



}

