<?php get_header(); /* Template Name: Contact Page */ ?>

<div class="row">
  <?php $cats = New WP_query([
      'post_type'=>'cat'
    ]);
     ?>

<?php if ($cats->have_posts()) : while ($cats->have_posts()) : $cats->the_post(); ?>
  <div class="col-md-4">
    <a href="<?php the_permalink(); ?>">
      <div class="btn-large">
        <img class="img-responsive" src="<?php the_field('catphoto') ?>" alt="">
        <h3><?php the_title(); ?></h3>
      </div>
    </a>
  </div>


<?php endwhile; endif; ?>
</div>





<?php get_footer(); ?>
