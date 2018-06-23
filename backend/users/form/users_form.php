<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// set image profile
if (isset($user_account['photo'])) {
    $image = "../../uploads/".$user_account['photo'];
}else{
    $image = "../../uploads/300.png";
}
?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> new admin user</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2">Name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-user"></i></span>
                <input  type="text" name="name" placeholder="Nama" class="form-control" value="<?php echo ($edit) ? $user_account['name'] : ''; ?>" autocomplete="off" required="required">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Email</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon">
                <i class="fa fa-envelope"></i></span>
                <input  type="text" name="email" placeholder="Email" class="form-control" value="<?php echo ($edit) ? $user_account['email'] : ''; ?>" autocomplete="off" required="required">
            </div>
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2">Mobile</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                <input  type="text" name="mobile" placeholder="No Handphone" class="form-control" value="<?php echo ($edit) ? $user_account['mobile'] : ''; ?>" autocomplete="off" >
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">User name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                <input  type="text" name="username" placeholder="user name" class="form-control" value="<?php echo ($edit) ? $user_account['username'] : ''; ?>" autocomplete="off" required="required">
            </div>
        </div>
    </div>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2" >Password</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input type="password" name="password" placeholder="Password " class="form-control"  autocomplete="off" <?php ($operation != 'edit') ? 'required="required"' : ''; ?>>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2" >Active</label>
        <div class="col-md-4">
            <select name="active" placeholder="Status" required="required" class="form-control">
                <option value="1">Active</option>
                <option value="0">Not Active</option>
            </select>
        </div>
    </div>
    <!-- radio checks -->
    <div class="form-group">
        <label class="col-md-2">User type</label>
        <div class="col-md-4">
            <div class="radio">
                <label>
                    <?php //echo $user_account['admin_type'] ?>
                    <input type="radio" name="role" value="admin" required="" <?php echo ($edit && $user_account['role'] =='admin') ? "checked": "" ; ?>/>Admin
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="role" value="users" required="" <?php echo ($edit && $user_account['role'] =='users') ? "checked": "" ; ?>/> Users
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2" >Photos</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                <input type="file" name="photo" p class="form-control"  id="imgInp" accept="image/*">
            </div>
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
