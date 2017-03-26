<div class="blog_post">
  <h1>
      <a href="<?=base_url()."blog/post/".$post[0]['id']?>"><?$post[0]['title']?></a><a href="#"><?=$post[0]['title']?></a>
  </h1>

  <p class="lead">
      by <span style="color:green; font-size:1.4em;"><?=$post[0]['username']?></span>
  </p>
  <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$post[0]['date']?></p>
  <p></p>
  <section>
    <?=$post[0]['content']?>
  </section>
  <hr>
</div>

<h3 style="color:green; border-top:5px solid black;">Didn't develop the comment section. Maybe i will do it later. It is agian cruding stuff. Already did tons of it. I thought moving to nother porject is worth more time than sticking with the same cruding stuff!!</h3>
<!-- <div class="comment">
  <h3>Comment</h3>
  <form class="form" action="index.html" method="post">
    <textarea name="name" class="form-control" rows="8" cols="80"></textarea>
    <input type="submit" class="form-control btn btn-default comment-button" name="post_submit" value="POST COMMENT">
  </form>
</div>

<div class="new_comment">
  <h2>Comments</h2>

  <div class="commented_by">
    <h3>commenter</h3>
    <p>March 14, 2017 at 4:12 pm</p>
  </div>
  <div class="comment_body">
    Hi, this is a comment.
    To get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.
    Commenter avatars come from Gravatar.
  </div>
</div> -->
