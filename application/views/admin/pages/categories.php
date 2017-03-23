<style media="screen">
  .categories .col-md-6:first-child{
    border-right: 1px solid #286090;
  }
  .categories h3{
    padding-bottom: 5px;
    border-bottom: 1px solid rgba(66, 66, 66, 0.41);
  }
</style>

<section class="categories">
  <div class="row">
    <div class="col-md-6">
      <h3>Add New Category</h3>

      <!-- Validation Errors -->
      <div style="color:red; font-weight:bold; border-left:3px solid black; padding-left:5px;">
        <?php
        if($this->session->userdata('addCategory')!=null){
          echo $this->session->userdata('addCategory');
          $this->session->unset_userdata('addCategory');
        }
        echo validation_errors();
        ?>
      </div>

      <!-- Add Category -->
      <form class="form" action="<?=base_url()."admin/addcategory"?>" method="post">
        <div class="form-group">
          <label for="name">Category Name:</label>
          <input type="text" name="name" class="form-control" value="<?php echo set_value('name'); ?>" placeholder="category name">
        </div>
        <div class="form-group">
          <label for="description">Description:</label>
          <textarea name="description" class="form-control" value="<?php echo set_value('description'); ?>" rows="8" cols="80"></textarea>
        </div>
        <!-- <div class="form-group">
          <label for="parent">Parent:</label>
          <select class="form-control" name="parent">
            <option value="">Mula</option>
          </select>
        </div> -->
        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
      </form>
    </div>
    <div class="col-md-6">
      <h3>Categories</h3>
      <?php echo "<pre>";
      print_r($categories);
      ?>
      <table class="table table-bordered table-striped">
        <thead>
          <th>Name</th>
          <th>Description</th>
          <th>Edit</th>
        </thead>
        <tbody>
          <tr>
            <td>Any</td>
            <td>Any Category</td>
            <td><a href="<?=base_url()."admin/editCategory"?>" class="btn btn-info">Edit</a></button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>
