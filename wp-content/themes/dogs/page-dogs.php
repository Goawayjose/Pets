<?php get_header(); /* Template Name: Dog Page */ ?>


<?php

if (!empty($_GET['search'])) {
	$search = $_GET['search'];
}
else {
	$search = '';
}
?>

<h1>Dogs</h1>
<div class="row">


<form action="<?php bloginfo('url');?>/dogs" method="GET">
<div class="form-group">
	<label for="search">Search</label>
	<input type="text" value="<?php echo $search; ?>" class="form-control" placeholder="Enter Dog name" id="search" name="search">
	<input type="submit" class="btn btn-primary" value="SEARCH">
	</div>
</form>



<?php

$dogs = new WP_Query([
	'post_type' => 'dog',
	's' => $search,
	'posts_per_page' => 20
]);

if ($dogs->have_posts()) : while ($dogs->have_posts()) : $dogs->the_post(); ?>
<div class="col-xs-4">
	<div class="well">
		<img src="<?php the_field('dogimg'); ?>" class="img-responsive">
	  	<h3><?php the_title(); ?></h3>
	  	<a href="<?php the_permalink();?>" class="btn btn-primary">View Dog</a>
  	</div>
</div>
<?php endwhile; endif; ?>

</div>


<?php get_footer(); ?>
