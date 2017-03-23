<section>
  <script type="text/javascript" src="<?=base_url()."asset/tinymce/tinymce.min.js"?>"> </script>
  <h1>Add New Post</h1>

  <form class="form" action="index.html" method="post">
    <div class="form-group">
      <input type="text" name="title" class="form-control" value="" placeholder="Enter title here">
    </div>
    <div class="form-group">
      <textarea name="name" class="form-control" id="TypeHere" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
      <select class="form-control" name="">
        <option value="">murgi</option>
        <option value="">hastia</option>
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
