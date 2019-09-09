<?php
session_start();
require_once './config/config.php';

if (empty($_SESSION['user_logged_in'])) {
	header('Location:index.php');
}
// delete mading
if (isset($_GET['delete_id'])) {
    $db = getDbInstance();
    $delete_id = $_GET['delete_id'];
	// Delete a user using user_id
	if ($delete_id) {
	    
	    $db->where('id', $delete_id);
	    $stat = $db->delete('mading');
	    if ($stat) {
	        $_SESSION['info'] = "Mading deleted successfully!";
	    
	    }
	}
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  //get data from input form  
	    $data_to_store = filter_input_array(INPUT_POST);
	    $db = getDbInstance();
	   	// set custom array
	
	    $data_to_store['created_at'] = date('Y-m-d H:i:s');
	    $data_to_store['updated_at'] = date('Y-m-d H:i:s');
	    $data_to_store['author'] = $_SESSION['user_id'];
	  
	    $last_id = $db->insert ('mading', $data_to_store);
	    if($last_id)
	    {
	    	$_SESSION['success'] = "Maidng added successfully!";
	    }  
}


// get lit mading by author
$db = getDbInstance();
$page = filter_input(INPUT_GET, 'page');
$pagelimit = 20;
if ($page == "") {
    $page = 1;
}

// If user searches 
$db->where('mading.author',$_SESSION['user_id'], '=');
$db->pageLimit = $pagelimit;
$db->join('users', 'mading.author = users.id', 'left');
$result = $db->arraybuilder()->paginate("mading", $page, 'mading.*, users.name');
$total_pages = $db->totalPages;
include_once 'includes_frontend/header.php';
?>
<style type="text/css">
			.jumbotron {
			 background: linear-gradient(#00C4FF, #36515F);
			 color: white;
			 margin-top: 40px;
		}

	</style>

<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-sm-5">
				<h1>MADING SAYA</h1>
				<p>Hey! selamat datang dan selamat belajar lagi! tanam ilmu sekarang, panen di masa depan</p>
			</div>
			<div class="col-sm-4">
				<img style="border-radius: 25px;" src="includes_frontend/img/header/login2.png" width="400" alt="">
			</div>
		</div>
	</div>
</div>

<section id="artikel" class="artikel">
	<div class="container">
		<div class="row">
     		<div class="col-lg-6">
            	<h3 class="page-header">Mading Saya</h3>
		    </div>
	        <div class="col-lg-6" style="">
	            <div class="page-action-links text-right">
	             <button class="btn btn-success" data-toggle="modal" data-target="#confirm-add"><span class="glyphicon glyphicon-plus"></span> Add new</button>
	            </div>
	        </div>
		</div>
		<?php include('includes/flash_messages.php') ?>
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-bordered table-condensed">
			        <thead>
			            <tr>
			                <th>No</th>
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
			                    <a href=""  class="btn btn-danger delete_btn btn-sm" data-toggle="modal" data-target="#confirm-delete-<?php echo $row['id'] ?>" style="margin-right: 8px;"><span class="fa fa-times"></span>
			                    
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
			                                    <a href="mading_saya.php?delete_id=<?php echo $row['id'] ?>" type="submit" class="btn btn-default pull-left">Yes</a>
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
			</div>
		</div>
	</div>
</section>
<!-- add modal -->
<div class="modal fade" id="confirm-add" role="dialog">
    <div class="modal-dialog modal-lg" style="">
      <form action="#" method="POST">
      <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h6 class="modal-title">Add Mading</h6>
            </div>
            <div class="modal-body">
                <div class="form-group">
			        <label class="col-md-2">Title</label>
			        <div class="col-md-4">
			            <input  type="text" name="title" placeholder="Title" class="form-control" value="" autocomplete="off" required="required">
			        </div>
			    </div>
			    <div class="form-group">
			        <label class="col-md-2">Content</label>
			        <div class="col-md-12">
			            <textarea name="content" class="form-control ckeditor" placeholder="text here !!!" ></textarea>
			        </div>
			    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary pull-left">Simpan</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
            </div>
          </div>
      </form>
      
    </div>
</div>
<script type="text/javascript" src="backend/assets/plugins/ckeditor/ckeditor.js" charset="utf-8"></script>
<?php include_once 'includes_frontend/footer.php'; ?>