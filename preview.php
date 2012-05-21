<?php 
require_once('../../../wp-load.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Pears  / Footer</title>
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />

<style type="text/css">
	body {
		background: #fff !important;
	}
</style>
<style id="preview" type="text/css">
<?php $key="css"; echo get_post_meta($_GET['p'], $key, true); ?>
</style>
<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>
</head>

<body>
<?php $key="html"; echo get_post_meta($_GET['p'], $key, true); ?>
</body>
</html>