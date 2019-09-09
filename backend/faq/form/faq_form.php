<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// get category

?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> Faq Item</legend>
    <!-- Text input-->
    <input type="hidden" name="category_id" value="<?php echo (isset($category_id)) ? $category_id : ''; ?>">
    <div class="form-group">
        <label class="col-md-2">Faq Category</label>
        <div class="col-md-8">
            <input  type="text"  placeholder="Nama" class="form-control" value="<?php echo (isset($category['name'])) ? $category['name'] : ''; ?>" autocomplete="off" required="required" readonly="readonly">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Faq Questions</label>
        <div class="col-md-8">
            <input  type="text" name="faq_question" placeholder="Faq Question" class="form-control" value="<?php echo (isset($faq['faq_question'])) ? $faq['faq_question'] : ''; ?>" autocomplete="off" required="required" >
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Faq Answer</label>
        <div class="col-md-8">
            <textarea name="faq_answer" placeholder="Faq Answer" class="form-control" required="required" cols="12" rows="5"><?php echo (isset($faq['faq_answer'])) ? $faq['faq_answer'] : ''; ?></textarea>
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