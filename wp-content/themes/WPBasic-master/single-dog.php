<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>




     <div class="container">




       <div class="well">
         <div class="row">
          <div class="col-md-6">
            <a href="#"><img class="img-responsive" src="<?php the_field('dogimg') ?>" alt=""></a>
          </div>
          <div class="col-md-6">
            <a href="#"><img class="img-responsive" src="<?php the_field('dogimg2') ?>" alt=""></a>
          </div>
         </div>
         <div class="row">
           <div class="col-md-12">
             <h1><?php the_title(); ?></h1>
             <?php the_content(); ?>
           </div>

         </div>
       </div>
<?php echo get_the_date(); ?> by <?php the_author(); ?>
   	</div>


      <p>Category:
      <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . edit_post_link(__('Edit'), ''); ?></p>

	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>

<?php get_footer(); ?>
