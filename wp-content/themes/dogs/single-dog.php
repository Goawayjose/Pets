<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<a href="<?php bloginfo('url');?>/dogs/" class="btn btn-default"> < Back</a>
<div class="well">

<img src="<?php the_field('image'); ?>" alt="Picture of <?php the_title(); ?>">

      <h1><?php the_title(); ?></h1>
      <ul>
      	<li><strong>COLOR</strong>: <?php the_field('color'); ?></li>
      	<li><strong>SIZE</strong>: <?php the_field('size'); ?></li>
      </ul>
		
		
		
</div>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>