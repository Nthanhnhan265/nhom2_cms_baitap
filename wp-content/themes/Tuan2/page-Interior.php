<?php
/*
Template Name: about Page
*/
?>
<?php get_header() ?>

<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/ocean.jpg)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title"><?php the_title() ?> </h1>
    <div class="page-banner__intro">
      <p>Learn how the school of your dreams got started.</p>
    </div>
  </div>
</div>

<div class="container container--narrow page-section">
  <?php
  //tìm trang cha 
  $parent_id = wp_get_post_parent_id(get_the_ID());
  if ($parent_id) {
  ?>
    <div class="metabox metabox--position-up metabox--with-home-link">
      <p>
        <a class="metabox__blog-home-link" href="<?php
                                                  echo site_url(get_post_field('post_name', $parent_id))
                                                  ?>">
          <i class="fa fa-home" aria-hidden="true"></i> Back to About Us</a>
        <span class="metabox__main"><?php the_title() ?></span>
      </p>
    </div>
  <?php } ?>

  <div class="page-links">
    <?php
    if (is_page()) :
      if ($post->post_parent) :
        $children = wp_list_pages('title_li=&child_of=' . $post->post_parent . '&echo=0');
      else :
        $children = wp_list_pages('title_li=&child_of=' . $post->ID . '&echo=0');
      endif;
      if ($children) : ?>
        <h2 class="page-links__title">
          <?php
          echo get_the_title($post->post_parent);
          ?>
        </h2>
        <div class="title">
          <span></span>
        </div>
        <ul class="min-list">
          <?php echo $children; ?>
        </ul>
    <?php
      endif;
    endif;
    ?>
  </div>

  <?php the_content() ?>
</div>


<div class="page-section page-section--white">
  <div class="container container--narrow">
    <h2 class="headline headline--medium">Biology Professors:</h2>

    <ul class="professor-cards">
      <li class="professor-card__list-item">
        <a href="#" class="professor-card">
          <img class="professor-card__image" src="images/barksalot.jpg" />
          <span class="professor-card__name">Dr. Barksalot</span>
        </a>
      </li>
      <li class="professor-card__list-item">
        <a href="#" class="professor-card">
          <img class="professor-card__image" src="images/meowsalot.jpg" />
          <span class="professor-card__name">Dr. Meowsalot</span>
        </a>
      </li>
    </ul>
    <hr class="section-break" />

    <div class="row group generic-content">
      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>

      <div class="one-third">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia voluptates vero vel temporibus aliquid possimus, facere accusamus modi. Fugit saepe et autem, laboriosam earum reprehenderit illum odit nobis, consectetur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos molestiae, tempora alias atque vero officiis sit commodi ipsa vitae impedit odio repellendus doloremque quibusdam quo, ea veniam, ad quod sed.</p>
      </div>
    </div>
  </div>
</div>
<?php get_footer() ?>