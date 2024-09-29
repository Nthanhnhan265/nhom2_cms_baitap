<?php 
echo "<h1>This is page.php</h1>";
while (have_posts()) {
  the_post(); ?>
  <h2>
      <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </h2>
  <?php the_excerpt(); ?>
  <hr>

<?php
}

?>
