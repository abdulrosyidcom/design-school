<?php
// define calss for user
class article_controller {
	// save user
    public static function store_article() {
	    //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    $data_to_store['date'] = date('Y-m-d H:i:s');
	    $data_to_store['author'] = $_SESSION['user_id'];
	  
	    $last_id = $db->insert ('article', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Article added successfully!";
	    	header('location: add_article.php');
	    	exit();
	    }  
    }

    // fungsi edit 
    public static function edit_article(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $article_id=  filter_input(INPUT_GET, 'article_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    // set to dt
	    $db->where('id',$article_id);
	    $stat = $db->update ('article', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Article has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Article";
	    }

	    header('location: index.php');
    }


    // delete user
    public static function delete_article($delete_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_id) {
		    
		    $db->where('id', $delete_id);
		    $stat = $db->delete('article');
		    if ($stat) {
		        $_SESSION['info'] = "Article deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }


}

