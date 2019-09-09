<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/materi_controller.php';

 
//Only super admin is allowed to access this page
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    echo 'Permission Denied';
    exit();
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    materi_controller::store_materi();
}

$edit = false;

// get data kelas
$db = getDbInstance();
$kelas = $db->query("SELECT * FROM master_kelas");

foreach ($kelas as $key => $value) {
    // get data child
    $data = $db->query("SELECT a.name, a.id as item_id, a.order FROM class_item a 
                        WHERE a.kelas_id = '".$value['id']."' ORDER BY a.order ASC");
    $kelas[$key]['class_item'] = $data;
}

require_once '../includes/header.php';
?>
<div id="page-wrapper">
	<div class="row">
		<div class="col-lg-12">
			<h2 class="page-header">Add Materi</h2>
		</div>
	</div>
    <?php include('../includes/flash_messages.php') ?>
	<!-- Success message -->
    <div class="well text-left filter-form">
    	<form class="form form-horizontal" action="" method="post"   enctype="multipart/form-data">
    		<?php include_once 'form/materi_form.php'; ?>
    	</form>
    </div>
</div>




<?php include_once '../includes/footer.php'; ?>