<section class="edit-category">
  <h3>Edit Category</h3>
  <form class="form" action="<?=base_url()."admin/updatecategory"?>" method="post">
    <div class="form-group">
      <label for="name">Category Name:</label>
      <input type="text" name="name" class="form-control" value="" placeholder="category name">
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <label for="parent">Parent:</label>
      <select class="form-control" name="parent">
        <option value="">Mula</option>
      </select>
    </div>
    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
  </form>
</section>
