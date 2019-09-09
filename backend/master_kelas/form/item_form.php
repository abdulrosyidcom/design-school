<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// get category

?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> Kelas Item</legend>
    <!-- Text input-->
    <input type="hidden" name="kelas_id" value="<?php echo (isset($kelas_id)) ? $kelas_id : ''; ?>">
    <div class="form-group">
        <label class="col-md-2">Nama Kelas</label>
        <div class="col-md-4">
            <input  type="text" class="form-control" value="<?php echo (isset($master_kelas['name'])) ? $master_kelas['name'] : ''; ?>" autocomplete="off" readonly="readonly">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Nama Item</label>
        <div class="col-md-4">
            <input  type="text" name="name" placeholder="Nama Item" class="form-control" value="<?php echo (isset($kelas['name'])) ? $kelas['name'] : ''; ?>" autocomplete="off" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Urutan</label>
        <div class="col-md-4">
            <input  type="number" name="order" placeholder="Urutan" class="form-control" value="<?php echo (isset($kelas['order'])) ? $kelas['order'] : ''; ?>" autocomplete="off" required="required" min="1">
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