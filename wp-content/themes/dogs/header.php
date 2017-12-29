<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">

	<?php wp_head();?>
</head>
<body>
  <div class="container">

	<?php if (!is_user_logged_in()): ?>
		<a href="<?php echo bloginfo('url'); ?>/login">Login</a>
	<?php else: ?>
		<a href="<?php echo wp_logout_url(home_url()); ?>">Logout</a>
	<?php endif; ?>
