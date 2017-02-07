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
