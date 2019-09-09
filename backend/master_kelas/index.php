<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/kelas_controller.php';

//Only super admin is allowed to access this page
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    header('HTTP/1.1 401 Unauthorized', true, 401);
    
    exit("401 Unauthorized");
}
// call delete
if (isset($_GET['delete_id'])) {
    kelas_controller::delete_kelas($_GET['delete_id']);
}

if (isset($_GET['delete_item_id'])) {
    kelas_controller::delete_kelas_item($_GET['delete_item_id']);
}


//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();
$result = $db->query("SELECT * FROM master_kelas");

foreach ($result as $key => $value) {
    // get data child
    $data = $db->query("SELECT a.name, a.id as item_id, a.order FROM class_item a 
                        WHERE a.kelas_id = '".$value['id']."' ORDER BY a.order ASC");
    $result[$key]['class_item'] = $data;
}



include_once '../includes/header.php';
?>

<div id="page-wrapper">
<div class="row">
     <div class="col-lg-6">
            <h1 class="page-header">Master Kelas</h1>
        </div>
        <div class="col-lg-6" style="">
            <div class="page-action-links text-right">
            <a href="add_kelas.php"> <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add new</button></a>
            </div>
        </div>
</div>
 <?php include('../includes/flash_messages.php') ?>

    <?php
    if (isset($del_stat) && $del_stat == 1) {
        echo '<div class="alert alert-info">Successfully deleted</div>';
    }
    ?>

    <!--   Filter section end-->
    <hr>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th class="header" width="5%">No</th>
                <th>Kelas</th>
                <th width="15%">Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $no = 1;
                foreach ($result as $row) : 
            ?>
                
            <tr style="background-color: #777777; color : #FFF;">
                <td><?php echo $no ?></td>
                <td><?php echo htmlspecialchars($row['name']) ?></td>
                <td class="text-center">
                    <a href="kelas_item_add.php?kelas_id=<?php echo $row['id']?>&operation=add" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span></a>

                    <a href="edit_kelas.php?kelas_id=<?php echo $row['id']?>&operation=edit" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a>

                    <a href=""  class="btn btn-danger delete_btn btn-sm" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['id'] ?>" style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span>
                    
                </td>
            </tr>
            <?php if (!empty($row['class_item'])) { ?>
            <tr>
                <td></td>
                <td colspan="2">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr>
                                <th class="header" width="5%">No</th>
                                <th>Judul</th>
                                <th width="10%" class="text-center">Urutan</th>
                                <th width="10%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $nos = 1;
                                foreach ($row['class_item'] as $val) : 
                            ?>
                            <tr>
                                <td><?php echo $nos ?></td>
                                <td><?php echo $val['name'] ?></td>
                                <td class="text-center"><?php echo $val['order'] ?></td>
                                <td>
                                    <a href="kelas_item_edit.php?item_id=<?php echo $val['item_id']?>&operation=edit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a onclick="return confirm('Are you sure you want to delete this item?');" href="index.php?delete_item_id=<?php echo $val['item_id']?>&operation=delete" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                                </td>
                            </tr>
                            <?php $nos++; endforeach; ?> 
                        </tbody>
                    </table>   
                </td>
            </tr>
            <?php } ?>
                <!-- Delete Confirmation Modal-->
                <div class="modal fade" id="confirm-delete-<?php echo $row['id'] ?>" role="dialog">
                    <div class="modal-dialog">
                      <form action="#" method="POST">
                      <!-- Modal content-->
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                              <h4 class="modal-title">Confirm</h4>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="del_id" id = "del_id" value="<?php echo $row['id'] ?>">
                                <p>Are you sure you want to delete this kelas?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="index.php?delete_id=<?php echo $row['id'] ?>" type="submit" class="btn btn-default pull-left">Yes</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                            </div>
                          </div>
                      </form>
                      
                    </div>
                </div>
            <?php 
                $no++;
                endforeach; 
            ?>   
        </tbody>
    </table>
    <!--    Pagination links-->
</div>
<?php include_once '../includes/footer.php'; ?>