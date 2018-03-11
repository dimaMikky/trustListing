<?php
$curmenu = 0;
include("admin/connect.php");
$result = mysql_query("SELECT * FROM mining WHERE 1 ORDER BY id DESC") or die(mysql_error());
$row = mysql_fetch_object($result);
include('beg.php');
include('inf_top.php')
?>
    <section id="main-section" class="main-section">
        <div class="container">
            <div class="row">
                <!--Left-->
                <div class="col-lg-8 content">
                    <!--News-Left-1-->
                    <div class="card card-nav-tabs">
  <div class="card-header card-header-success">
    Quote
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
    </blockquote>
  </div>
</div>
<div class="card card-nav-tabs">
  <h4 class="card-header card-header-info">Featured</h4>
  <div class="card-body">
    <h4 class="card-title">Special title treatment</h4>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card card-background" style="background-image: url('https://images.unsplash.com/photo-1497366811353-6870744d04b2?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D')">
  <div class="card-body">
    <h6 class="card-category text-info">Productivy Apps</h6>
    <a href="#pablo">
      <h3 class="card-title">The Best Productivity Apps on Market</h3>
      </a>
      <p class="card-description">
      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
      Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
      </p>
    <a href="#pablo" class="btn btn-white btn-link">
      <i class="material-icons">subject</i> Read Article
    </a>
    <a href="#pablo" class="btn btn-white btn-link">
      <i class="material-icons">watch_later</i> Watch Later
    </a>
  </div>
</div>
                </div>
                <?php include('right_side.php'); ?>
            </div>
        </div>
        </div>
    </section>

    <?php
//include('inf_top.php');
include('footer.php');
?>