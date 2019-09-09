<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/kelas_controller.php';

 
//Only super admin is allowed to access this page
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    echo 'Permission Denied';
    exit();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    kelas_controller::store_kelas();
}

$edit = false;
$image = '';

require_once '../includes/header.php';
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Add Kelas</h2>
		</div>
	</div>
    <?php include('../includes/flash_messages.php') ?>
	<!-- Success message -->
    <div class="well text-left filter-form">
    	<form class="form form-horizontal" action="" method="post"   enctype="multipart/form-data">
    		<?php include_once 'form/kelas_form.php'; ?>
    	</form>
    </div>
</div>




<?php include_once '../includes/footer.php'; ?>