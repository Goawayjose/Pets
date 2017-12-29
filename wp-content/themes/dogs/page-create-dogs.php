<?php get_header(); /* Template Name: Create dogs Page */ ?>?>



<?php
if(
  !empty($_POST['title'])
&& !empty($_POST['color'])
&& isset($_POST['submit'])
){
  $my_post = array(
      'post_title'    => wp_strip_all_tags( $_POST['title'] ),
      'post_status'   => 'publish',
      'post_author'   => 1,
      'post_type' => 'dog'
  );
    $post_id = wp_insert_post( $my_post );


  update_field('color', wp_strip_all_tags($_POST['color']), $post_id);

  echo '<div class="alert alert-success"> you did it! =) </div>';

}
?>


<h1>create dog</h1>
 <form class="" action="<?php bloginfo('url' ); ?>/create-dogs" method="POST">
   <label for="title" class="sr-only">Title</label>
   <input type="text"  class="form-control" name="title" id="title" placeholder="enter title here">

   <label for="color" class="sr-only">Color</label>
   <input type="text" required class="form-control" name="color" id="color" placeholder="Enter color here">

   <input type="submit" class="btn btn-primary" value="Create">
 </form>


<?php get_footer(); ?>
