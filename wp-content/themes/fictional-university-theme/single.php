<?php 
echo "<h1>This is single.php</h1>";

while (have_posts()) {
  the_post(); ?>
  <h2>
     <?php the_title(); ?>
  </h2>
  <?php the_post_navigation(); ?>
  <hr>
<?php
}
?>
