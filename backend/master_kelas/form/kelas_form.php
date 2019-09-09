<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// get image

if (isset($kelas['icon'])) {
    $image = "../../uploads/".$kelas['icon'];
}else{
    $image = "../../uploads/300.png";
}
?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> Kelas</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2">Nama Kelas</label>
        <div class="col-md-4">
            <input  type="text" name="name" placeholder="Nama Kelas" class="form-control" value="<?php echo (isset($kelas['name'])) ? $kelas['name'] : ''; ?>" autocomplete="off" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Deskripsi</label>
        <div class="col-md-4">
            <textarea name="description" placeholder="Deskripsi" class="form-control" cols="12" rows="5"><?php echo (isset($kelas['description'])) ? $kelas['description'] : ''; ?></textarea>
        </div>
    </div>
     <div class="form-group">
        <label class="col-md-2" >Icon</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-file-image-o"></i></span>
                <input type="file" name="icon" class="form-control"  id="imgInp" accept="image/*">
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