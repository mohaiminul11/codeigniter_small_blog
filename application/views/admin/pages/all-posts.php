<section class="all-posts">
  <div class="row">
    <h3>All Posts</h3>
    <table class="table table-bordered table-striped">
      <thead>
        <th>Post Title</th>
        <th>Categories</th>
        <th>Date</th>
        <th>Action</th>
      </thead>

      <tbody>

        <?php foreach ($posts as $post):?>
        <tr>
          <td><?=$post['title']?></td>
          <td><?=$post['cat_name']?></td>
          <td><?=$post['date']?></td>
          <td><a class="btn btn-info" href="<?=base_url()."admin/editpost/".$post['id']?>">Edit</a><a class="btn btn-danger" href="<?=base_url()."admin/deletePost/".$post['id']?>">Delete</a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
