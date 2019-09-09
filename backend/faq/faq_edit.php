<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/faq_controller.php';


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

    faq_controller::edit_faq();
}


$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
($operation == 'edit') ? $edit = true : $edit = false;
//Select where clause
$db->where('id', $item_id);
$faq = $db->getOne("faq");

$db->where('id', $faq['category_id']);
$category = $db->getOne("faq_category");
$category_id = $category['id'];
// Set values to $row

// import header
require_once '../includes/header.php';
?>
<div id="page-wrapper">

    <div class="row">
     <div class="col-lg-12">
            <h2 class="page-header">Edit Faq Item</h2>
        </div>
        
    </div>
    
    <form class="well form-horizontal" action="" method="post"  id="contact_form" enctype="multipart/form-data">
        <?php include_once 'form/faq_form.php'; ?>
    </form>
</div>


<?php include_once '../includes/footer.php'; ?>