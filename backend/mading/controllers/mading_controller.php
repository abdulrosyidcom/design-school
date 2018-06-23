<?php
// define calss for user
class mading_controller {
	// save user
   

    // fungsi edit 
    public static function update_mading(){
    	// get input values
    	$data_to_update = filter_input_array(INPUT_POST);
   	    // Sanitize input post if we want
	    $db = getDbInstance();
	    $mading_id=  filter_input(INPUT_POST, 'mading_id',FILTER_VALIDATE_INT);
	  	// set update at
	    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
	    unset($data_to_update['mading_id']);

	    // set to dt
	    $db->where('id',$mading_id);
	    $stat = $db->update ('mading', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "mading has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Mading";
	    }

	    header('location: index.php');
    }


    // delete user
    public static function delete_mading($delete_id) {
    	$db = getDbInstance();

		if($_SESSION['role']!='admin'){
		    header('HTTP/1.1 401 Unauthorized', true, 401);
		    exit("401 Unauthorized");
		}

		// Delete a user using user_id
		if ($delete_id) {
		    
		    $db->where('id', $delete_id);
		    $stat = $db->delete('mading');
		    if ($stat) {
		        $_SESSION['info'] = "Mading deleted successfully!";
		        header('location: index.php');
		        exit; 
		    }
		}
    }


}

