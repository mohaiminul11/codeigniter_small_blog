<section>
  <script type="text/javascript" src="<?=base_url()."asset/tinymce/tinymce.min.js"?>"> </script>
  <h1>Add New Post</h1>
  <div style="color:red; font-weight:bold; border-left:3px solid black; padding-left:5px;">
    <?php
    if($this->session->userdata('addFailed')!=NULL){
      echo $this->session->userdata('addFailed');
    }
    echo validation_errors();
    ?>
  </div>
  <form class="form" action="<?=base_url()."admin/addnewpost"?>" method="post">
    <div class="form-group">
      <input type="text" name="title" class="form-control" value="<?php echo set_value('title'); ?>" placeholder="Enter title here">
    </div>
    <div class="form-group">
      <textarea name="post" class="form-control" value="<?php echo set_value('post'); ?>" id="TypeHere" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="category">
        <?php
        foreach ($category as $cat): ?>
          <option value="<?=$cat['cat_id']?>"><?=$cat['cat_name']?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <!-- <div class="form-group"> -->
      <input type="submit" class="btn btn-success" name="submit" value="Post">
    <!-- </div> -->
  </form>


</section>
<script type="application/x-javascript">
    tinymce.init({menubar:false,selector:'#TypeHere'});
</script>
