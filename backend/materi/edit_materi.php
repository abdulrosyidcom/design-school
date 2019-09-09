<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/materi_controller.php';


$materi_id=  filter_input(INPUT_GET, 'materi_id');

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

    materi_controller::edit_materi();
}


$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
//Select where clause
$db->where('id', $materi_id);

$materi = $db->getOne("class_content");

// get data kelas
$db = getDbInstance();
$kelas = $db->query("SELECT * FROM master_kelas");

foreach ($kelas as $key => $values) {
    // get data child
    $data = $db->query("SELECT a.name, a.id as item_id, a.order FROM class_item a 
                        WHERE a.kelas_id = '".$values['id']."' ORDER BY a.order ASC");
    $kelas[$key]['class_item'] = $data;
}



// Set values to $row

// import header
require_once '../includes/header.php';
?>
<div id="page-wrapper">

    <div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Update Materi</h2>
        </div>
        
    </div>
    
    <form class="well form-horizontal" action="" method="post"  id="contact_form" enctype="multipart/form-data">
        <?php include_once 'form/materi_form.php'; ?>
    </form>
</div>


<?php include_once '../includes/footer.php'; ?>