<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// get category

?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> Category Faq</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2">Nama</label>
        <div class="col-md-8">
            <input  type="text" name="name" placeholder="Nama" class="form-control" value="<?php echo (isset($category['name'])) ? $category['name'] : ''; ?>" autocomplete="off" required="required">
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