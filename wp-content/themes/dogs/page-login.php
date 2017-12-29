<?php get_header(); /* Template Name: Login Page */ ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <div class="well">
    <?php the_content(); ?>
    <?php

if (!is_user_logged_in()) {

    $args = array(
	'echo'           => true,
	'remember'       => true,
	'redirect'       => 'http://localhost:8888/pets/dogs',
	'form_id'        => 'loginform',
	'id_username'    => 'user_login',
	'id_password'    => 'user_pass',
	'id_remember'    => 'rememberme',
	'id_submit'      => 'wp-submit',
	'label_username' => __( 'Username' ),
	'label_password' => __( 'Password' ),
	'label_remember' => __( 'Remember Me' ),
	'label_log_in'   => __( 'Log In' ),
	'value_username' => '',
	'value_remember' => false
  );

    wp_login_form( $args ); ?>

  <a href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">Lost Password</a>
<?php } ?>


</div>

<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>
