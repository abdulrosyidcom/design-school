<?php
$operation = filter_input(INPUT_GET, 'operation',FILTER_SANITIZE_STRING); 
$head_text = ($operation == 'edit') ? 'Edit' : 'Add';
$item_id = (isset($materi['item_id'])) ? $materi['item_id'] : '';


// get category

?>
<fieldset>
    <!-- Form Name -->
    <legend><?=$head_text;?> Materi</legend>
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-2">Title</label>
        <div class="col-md-10">
            <input  type="text" name="title" placeholder="Title" class="form-control" value="<?php echo (isset($materi['title'])) ? $materi['title'] : ''; ?>" autocomplete="off" required="required">
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Kelas</label>
        <div class="col-md-6">
            <select name="item_id" class="form-control" placeholder="pilih kelas">
                 <?php foreach ($kelas as $row) : ?>
                    <optgroup label="<?=$row['name']?>">
                        <?php foreach ($row['class_item'] as $value) : ?>
                            <option value="<?=$value['item_id']?>" <?php echo ($item_id == $value['item_id']) ?   'selected="selected"' :  '';?> >
                                <?=$value['name']?>      
                            </option>
                        <?php  endforeach; ?> 
                    </optgroup>
               <?php endforeach; ?> 
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Content</label>
        <div class="col-md-10">
            <textarea name="content" class="form-control ckeditor" placeholder="text here !!!" ><?php echo((isset($materi['content'])) ? $materi['content'] : ''); ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-2">Video URL</label>
        <div class="col-md-6">
            <input  type="text" name="video_url" placeholder="Video URL" class="form-control" value="<?php echo (isset($materi['video_url'])) ? $materi['video_url'] : ''; ?>" autocomplete="off" required="required">
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


