<?php
session_start();
require_once '../../config/config.php';
require_once '../includes/auth_validate.php';
require_once 'controllers/mading_controller.php';

//Only super admin is allowed to access this page
if ($_SESSION['role'] !== 'admin') {
    // show permission denied message
    header('HTTP/1.1 401 Unauthorized', true, 401);
    
    exit("401 Unauthorized");
}
// call delete
if (isset($_GET['delete_id'])) {
    mading_controller::delete_mading($_GET['delete_id']);
}

if (isset($_POST['mading_id'])) {
    mading_controller::update_mading($_POST['mading_id']);
}


//Get data from query string
$search_string = filter_input(INPUT_GET, 'search_string');

$page = filter_input(INPUT_GET, 'page');
$pagelimit = 20;
if ($page == "") {
    $page = 1;
}


//Get DB instance. i.e instance of MYSQLiDB Library
$db = getDbInstance();

// If user searches 
if ($search_string) {
    $db->where('title', '%' . $search_string . '%', 'like');
    $db->orderBy('title', 'ASC');
}



$db->pageLimit = $pagelimit;
$db->join('users', 'mading.author = users.id', 'left');
$result = $db->arraybuilder()->paginate("mading", $page, 'mading.*, users.name');
$total_pages = $db->totalPages;


// get columns for order filter
foreach ($result as $value) {
    foreach ($value as $col_name => $col_value) {
        $filter_options[$col_name] = $col_name;
    }
    //execute only once
    break;
}


include_once '../includes/header.php';
?>

<div id="page-wrapper">
<div class="row">
     <div class="col-lg-6">
            <h1 class="page-header">Mading</h1>
        </div>
        <div class="col-lg-6" style="">
          
        </div>
</div>
 <?php include('../includes/flash_messages.php') ?>

    <?php
    if (isset($del_stat) && $del_stat == 1) {
        echo '<div class="alert alert-info">Successfully deleted</div>';
    }
    ?>
    
    <!--    Begin filter section-->
    <div class="well text-left filter-form">
        <form class="form form-inline" action="">
            <label for="input_search" >Search</label>
            <input type="text" class="form-control" id="input_search"  name="search_string" value="<?php echo $search_string; ?>" placeholder="Title">
           
            <input type="submit" value="Go" class="btn btn-primary">

        </form>
    </div>
    <!--   Filter section end-->
    <hr>
    <table class="table table-striped table-bordered table-condensed">
        <thead>
            <tr>
                <th class="header">No</th>
                <th>Title</th>
                <th>Status</th>
                <th>Date</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

            <?php 
            $no = 1;
                foreach ($result as $row) : 
            ?>
                
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo htmlspecialchars($row['title']) ?></td>
                <td class="text-center " style="vertical-align: middle;">
                    <?php if($row['status'] == 'waiting'){
                        echo "<span class='label label-warning'>Waiting</span>";
                    } elseif($row['status'] == 'approved'){
                        echo "<span class='label label-primary'>Approved</span>";
                    }else{
                         echo "<span class='label label-danger'>Rejected</span>";
                    }?>
                </td>
                <td><?php echo htmlspecialchars($row['updated_at']) ?></td>
                <td><?php echo htmlspecialchars($row['name']) ?></td>

                <td class="text-center">
                    <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#confirm-update-<?php echo $row['id'] ?>"><span class="glyphicon glyphicon-edit"></span></a>

                    <a href=""  class="btn btn-danger delete_btn btn-sm" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['id'] ?>" style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span>
                    
                </td>
            </tr>
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
                                    <p>Are you sure you want to delete this mading?</p>
                                </div>
                                <div class="modal-footer">
                                    <a href="index.php?delete_id=<?php echo $row['id'] ?>" type="submit" class="btn btn-default pull-left">Yes</a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                </div>
                              </div>
                          </form>
                          
                        </div>
                    </div>

                    <!-- update status Modal-->
                     <div class="modal fade" id="confirm-update-<?php echo $row['id'] ?>" role="dialog">
                        <div class="modal-dialog">
                          <form action="index.php" method="POST">
                          <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h4 class="modal-title">Update Status</h4>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" name="mading_id" id="update_id" value="<?php echo $row['id'] ?>">
                                    <div class="form-group">
                                        <label class="col-md-2">Status</label>
                                        <div class="col-md-4">
                                            <select class="form-control" name="status">
                                                <option value="approved">Approved</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button  type="submit" class="btn btn-default pull-left">Yes</button>
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
    <div class="text-center">

        <?php
        if (!empty($_GET)) {
            //we must unset $_GET[page] if built by http_build_query function
            unset($_GET['page']);
            $http_query = "?" . http_build_query($_GET);
        } else {
            $http_query = "?";
        }
        if ($total_pages > 1) {
            echo '<ul class="pagination text-center">';
            for ($i = 1; $i <= $total_pages; $i++) {
                ($page == $i) ? $li_class = ' class="active"' : $li_class = "";
                echo '<li' . $li_class . '><a href="index.php' . $http_query . '&page=' . $i . '">' . $i . '</a></li>';
            }
            echo '</ul></div>';
        }
        ?>
    </div>
</div>
<?php include_once '../includes/footer.php'; ?>