<?php
session_start();
require_once './config/config.php';

if (empty($_SESSION['user_logged_in'])) {
	header('Location:index.php');
}


// get profil date
$user_id=  $_SESSION['user_id'];
// If post update process
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // get input values
	$data_to_update = filter_input_array(INPUT_POST);
	// uploads file
    if (!empty($_FILES["photo"]["name"])) {
    	$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES["photo"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check file size
		if ($_FILES["photo"]["size"] > 500000) {
		    $_SESSION['failure'] = "Ukuran file anda terlalu besar";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    $_SESSION['failure'] = "File yang anda upload bukan gambar";
		    $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
			$_SESSION['failure'] = $_SESSION['failure'];
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
		    	$_SESSION['success'] = "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
		    	$data_to_update['photo'] = $_FILES["photo"]["name"];
		    } else {
		        $_SESSION['failure'] = "Sorry, there was an error uploading your file.";
		    
		    }
		}
    }
    // Sanitize input post if we want
    $db = getDbInstance();
   
    //Encrypting the password
    if (empty($data_to_update['password'])) {
    	unset($data_to_update['password']);
    }else{
    	$data_to_update['password']=md5($data_to_update['password']);
    }
    $data_to_update['updated_at'] = date('Y-m-d H:i:s');
    // set to dt
    $db->where('id',$user_id);
    $stat = $db->update ('users', $data_to_update);
    // return status
    if($stat)
    {
        $_SESSION['success'] = "User has been updated successfully";
    }
    else
    {
        $_SESSION['failure'] = "Failed to update Admin user";
    }
}


$db = getDbInstance();
//Select where clause
$db->where('id', $user_id);

$user_account = $db->getOne("users");

if (isset($user_account['photo'])) {
    $image = "uploads/".$user_account['photo'];
}else{
    $image = "uploads/300.png";
}




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
				<h1>UPDATE PROFIL</h1>
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
			<?php include('includes/flash_messages.php') ?>
			<div class="row">
				<div class="col-md-6">
				<form class="well form-horizontal" action="" method="post"  id="contact_form" enctype="multipart/form-data">
				    <fieldset>
					    
					    <!-- Text input-->
					    <div class="form-group">
					        <label class="col-md-2">Name</label>
					        <div class="col-md-6 ">
					            <input  type="text" name="name" placeholder="Nama" class="form-control" value="<?php echo $user_account['name'];?>" autocomplete="off" required="required">
					        </div>
					    </div>
					    
					    <div class="form-group">
					        <label class="col-md-2">Mobile</label>
					        <div class="col-md-6">
					             <input  type="text" name="mobile" placeholder="No Handphone" class="form-control" value="<?php echo $user_account['mobile'];?>" autocomplete="off" >
					        </div>
					    </div>
					    <!-- Text input-->
					    <div class="form-group">
					        <label class="col-md-2" >Password</label>
					        <div class="col-md-6 inputGroupContainer">
					            <input type="password" name="password" placeholder="Password " class="form-control"  autocomplete="off">
					            <em class="text-danger">** isi jika ingin diganti</em>
					        </div>
					    </div>
					    
					    <div class="form-group">
					        <label class="col-md-2" >Photos</label>
					        <div class="col-md-6">
					            <input type="file" name="photo" p class="form-control"  id="imgInp" accept="image/*">
					            <br>
					            <img id="blah" src="<?=$image?>" alt="your image"  style="width:200px;height:auto;position:relative" />
					        </div>
					    </div>
					    <!-- Button -->
					    <div class="form-group">
					        <label class="col-md-2"></label>
					        <div class="col-md-4">
					            <button type="submit" class="btn btn-primary" >Save <span class="glyphicon glyphicon-send"></span></button>
					        </div>
					    </div>
					</fieldset>


			    </form>
				</div>
			</div>
		</div>
</section>
<script type="text/javascript">
    function readURL(input) {

          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#blah').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
          }
        }

        $("#imgInp").change(function() {
          readURL(this);
        });
</script>

<?php include_once 'includes_frontend/footer.php'; ?>