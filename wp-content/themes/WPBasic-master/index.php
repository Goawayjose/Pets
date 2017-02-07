<?php get_header(); ?>

<div class="row">
  <?php $dapages = New WP_query([
      'post_type'=>'page'
    ]);
     ?>

<?php if ($dapages->have_posts()) : while ($dapages->have_posts()) : $dapages->the_post(); ?>
  <div class="col-md-4">
    <a href="<?php the_permalink(); ?>">
      <h1><?php the_title(); ?></h1>
      <img class="img-responsive" src="<?php the_field('dogimg') ?>" alt="">
    </a>
  </div>


<?php endwhile; endif; ?>
</div>


<?php get_footer(); ?>
