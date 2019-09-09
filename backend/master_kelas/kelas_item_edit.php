<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/kelas_controller.php';


$item_id=  filter_input(INPUT_GET, 'item_id');

$db = getDbInstance();
//Serve POST request.  
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // If non-super user accesses this script via url. Stop the exexution
    if($_SESSION['role']!=='admin')
    {
        // show permission denied message
        echo 'Permission Denied';
        exit();
    }

    kelas_controller::edit_kelas_item();
}


$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
//Select where clause
$db->where('id', $item_id);
$kelas = $db->getOne("class_item");

$db->where('id', $kelas['kelas_id']);
$master_kelas = $db->getOne("master_kelas");
$kelas_id = $master_kelas['id'];
// Set values to $row

// import header
require_once '../includes/header.php';
?>
<div id="page-wrapper">

    <div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Edit Kelas Item</h2>
        </div>
        
    </div>
    
    <form class="well form-horizontal" action="" method="post"  id="contact_form" enctype="multipart/form-data">
        <?php include_once 'form/item_form.php'; ?>
    </form>
</div>


<?php include_once '../includes/footer.php'; ?>