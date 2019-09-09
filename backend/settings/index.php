<?php 
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/settings_controller.php';
//Only super admin is allowed to access this page
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    header('HTTP/1.1 401 Unauthorized', true, 401);
    
    exit("401 Unauthorized");
}
// get data settings
$db = getDbInstance();
//Select where clause
$db->where('id', '1');
$settings = $db->getOne("settings");
// post settings
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    echo 'Permission Denied';
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    settings_controller::save_settings();
}


include_once '../includes/header.php';
?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Site Settings</h2>
		</div>
	</div>
    <?php include('../includes/flash_messages.php') ?>
	<!-- Success message -->
    <div class="well text-left filter-form">
    	<form class="form form-horizontal" action="" method="post"   enctype="multipart/form-data">
			<div class="row">
			  	<div class="col-md-12">                                
				      	<div class="form-group">
				          <label for="fname">Site Title</label>
				          <input type="text" class="form-control" required="required" value="<?php echo((isset($settings['site_title'])) ? $settings['site_title'] : ''); ?>" name="site_title" maxlength="255">
				      	</div> 
						<div class="form-group">
						  <label for="fname">Site Description</label>
						  <input type="text" class="form-control" required="required" value="<?php echo((isset($settings['site_desc'])) ? $settings['site_desc'] : ''); ?>" name="site_desc" maxlength="255">
						</div> 
						<div class="form-group">
						  <label for="fname">Site Meta</label>
						  <input type="text" class="form-control" required="required" value="<?php echo((isset($settings['meta'])) ? $settings['meta'] : ''); ?>" name="meta" maxlength="255">
						</div> 
						<div class="form-group">
						  <label for="fname">Facebook</label>
						  <input type="text" class="form-control"  value="<?php echo((isset($settings['facebook_url'])) ? $settings['facebook_url'] : ''); ?>" name="facebook_url" maxlength="255">
						</div>
						<div class="form-group">
						  <label for="fname">Intagram</label>
						  <input type="text" class="form-control"  value="<?php echo((isset($settings['instagram_url'])) ? $settings['instagram_url'] : ''); ?>" name="instagram_url" maxlength="255">
						</div> 
						<div class="form-group">
						  <label for="fname">Twitter</label>
						  <input type="text" class="form-control" value="<?php echo((isset($settings['twitter_url'])) ? $settings['twitter_url'] : ''); ?>" name="twitter_url" maxlength="255">
						</div>
						<div class="form-group">
						  <label for="fname">Youtube</label>
						  <input type="text" class="form-control"  value="<?php echo((isset($settings['youtube_url'])) ? $settings['youtube_url'] : ''); ?>" name="youtube_url" maxlength="255">
						</div> 
						<div class="form-group">
						  <label for="fname">About</label>
						  <textarea name="about" class="form-control ckeditor" placeholder="text here !!!" ><?php echo((isset($settings['about'])) ? $settings['about'] : ''); ?></textarea>
						 
						</div>  
			  	</div>
			</div>
			<input type="submit" class="btn btn-primary" value="Submit" />
			<input type="reset" class="btn btn-default" value="Reset" />    
    	</form>
    </div>
</div>
<!-- load js and css -->
<script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js" charset="utf-8"></script>

<?php include_once '../includes/footer.php'; ?>