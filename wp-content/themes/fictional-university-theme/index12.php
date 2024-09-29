<?php 
get_header();

echo "<h1>This is trang index.php</h1>";
while (have_posts()) {
  the_post(); ?>
  <h2>
      <a href="<?php the_permalink() ?>" class="bg-red-500; "><?php the_title(); ?></a>
  </h2>
  <?php the_excerpt(); ?>
  <hr>
  <header style="background: rgb(23,85,164);
background: linear-gradient(93deg, rgba(23,85,164,1) 18%, rgba(38,216,24,1) 100%);;height:200px;over-flow:hidden">
        <ul class="list" style="display:flex;gap:10px;width:90%;border-radius:15px;over-flow:hidden;margin-top:1000px">
            <li style="background:green;"><a href="page.php">Home1</a></li>
            <li><a href="" style="background:red;">Home1</a></li> 
            <li><a href="">Home1</a></li>
           
            <!-- <img src="demo.png" alt="" style="width:100px;height:100px"> -->
        </ul>
  </header>
<?php
}

?>
<?php get_footer();?>
