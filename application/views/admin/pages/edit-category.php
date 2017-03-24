<section class="edit-category">
  <h3>Edit Category</h3>
  <div style="color:red; font-weight:bold; border-left:3px solid black; padding-left:5px;">
    <?php
    echo validation_errors();
    if ($this->session->userdata('updatecat')!=NULL) {
      echo $this->session->userdata('updatecat');
      $this->session->unset_userdata('updatecat');
    }
    ?>
  </div>
  <form class="form" action="<?=base_url()."admin/updatecategory"?>" method="post">
    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" name="name" class="form-control" value="<?=$singlecat[0]['cat_name']?>" placeholder="category name">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" class="form-control" rows="8" cols="80"><?=$singlecat[0]['description']?></textarea>
    </div>
    <input type="text" hidden name="id" value="<?=$singlecat[0]['cat_id']?>">
    <!-- <div class="form-group">
      <label for="parent">Parent:</label>
      <select class="form-control" name="parent">
        <option value="">Mula</option>
      </select>
    </div> -->
    <input type="submit" class="btn btn-primary" name="submit" value="Update Category">
  </form>
</section>
