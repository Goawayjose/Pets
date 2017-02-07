<?php get_header(); /* Template Name: Contact Page */ ?>

<div class="row">
  <?php $dogs = New WP_query([
      'post_type'=>'dog'
    ]);
     ?>

<?php if ($dogs->have_posts()) : while ($dogs->have_posts()) : $dogs->the_post(); ?>
  <div class="col-md-4">
    <a href="<?php the_permalink(); ?>">
      <h1><?php the_title(); ?></h1>
      <img class="img-responsive" src="<?php the_field('dogimg') ?>" alt="">
    </a>
  </div>


<?php endwhile; endif; ?>
</div>





<?php get_footer(); ?>
