<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
// get category

?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> new article</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2">Title</label>
        <div class="col-md-4">
            <input  type="text" name="title" placeholder="Title" class="form-control" value="<?php echo (isset($article['title'])) ? $article['title'] : ''; ?>" autocomplete="off" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Content</label>
        <div class="col-md-10">
            <textarea name="content" class="form-control  ckeditor" placeholder="text here !!!" ><?php echo((isset($article['content'])) ? $article['content'] : ''); ?></textarea>
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
<script type="text/javascript" src="../assets/plugins/ckeditor/ckeditor.js" charset="utf-8"></script>


