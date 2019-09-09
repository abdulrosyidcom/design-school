<?php
// define calss for user
class settings_controller {
	// save user
    public static function save_settings() {
	    // update data
	    $data_to_update = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	    $db->where('id','1');
	    $stat = $db->update ('settings', $data_to_update);
	    // return status
	    if($stat)
	    {
	        $_SESSION['success'] = "Settings has been updated successfully";
	    }
	    else
	    {
	        $_SESSION['failure'] = "Failed to update Settings";
	    }
	    
    }


}

