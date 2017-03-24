<section class="all-posts">
  <div class="row">
    <h3>All Posts</h3>
    <table class="table table-bordered table-striped">
      <thead>
        <th>Post Title</th>
        <th>content</th>
        <th>Categories</th>
        <th>Date</th>
        <th>Action</th>
      </thead>

      <tbody>

        <?php foreach ($posts as $post):?>
        <tr>
          <td><?=$post['title']?></td>
          <td><?=$post['content']?></td>
          <td><?=$post['cat_name']?></td>
          <td><?=$post['date']?></td>
          <td><a href="<?=base_url()."admin/editpost"?>">Edit</a></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</section>
