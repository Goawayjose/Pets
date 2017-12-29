<?php get_header(); /* Template Name: Home Page */?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div class="well">
    <?php the_content(); ?>



<?php

$slideshow = get_field('slideshow');
$i = 1;
foreach ($slideshow as $slide){?>
  <div class="">
    <img src="<?php echo $slide['image']; ?>" alt="">
  </div>


<?php

$i++;
} ?>


</div>
<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
