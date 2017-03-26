<?php $this->load->helper('text'); ?>
<!-- <h1 class="page-header">
    Page Heading
</h1> -->
<?php
  foreach($posts as $post):

 ?>
 <div class="blog_post">
   <h2>
       <a href="<?=base_url()."blog/post/".$post['id']?>"><?=$post['title']?></a>
   </h2>

   <p class="lead">
       by <span style="color:green; font-size:1.4em;"><?=$post['username']?></span>
   </p>
   <p><span class="glyphicon glyphicon-time"></span>posted:<?=$post['date']?></p>
   <p></p>
   <section>
     <?=word_limiter($post['content'], 5); ?>
   </section>
   <a class="btn btn-primary" href="<?=base_url()."blog/post/".$post['id']?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

   <hr>
 </div>
 <?php endforeach; ?>





<!-- Pager -->
<!-- <ul class="pager">
    <li class="previous">
        <a href="#">&larr; Older</a>
    </li>
    <li class="next">
        <a href="#">Newer &rarr;</a>
    </li>
</ul> -->
