<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/kelas_controller.php';


$kelas_id=  filter_input(INPUT_GET, 'kelas_id');

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

    kelas_controller::edit_kelas();
}


$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
//Select where clause
$db->where('id', $kelas_id);

$kelas = $db->getOne("master_kelas");



// Set values to $row

// import header
require_once '../includes/header.php';
?>
<div id="page-wrapper">

    <div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Update Kelas</h2>
        </div>
        
    </div>
    
    <form class="well form-horizontal" action="" method="post"  id="contact_form" enctype="multipart/form-data">
        <?php include_once 'form/kelas_form.php'; ?>
    </form>
</div>


<?php include_once '../includes/footer.php'; ?>