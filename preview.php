<?php 
require_once('../../../wp-load.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Preview</title>
<link rel="stylesheet/less" media="screen, projection" href="<?php echo get_template_directory_uri(); ?>/css/screen.less" />

<style type="text/css">
	body {
		background: #fff !important;
	}
	.wrap {
		padding: 20px;
	}
</style>
<style id="preview" type="text/css">
<?php $key="css"; echo get_post_meta($_GET['p'], $key, true); ?>
</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/less.js"></script>
</head>

<body>
	<div class="wrap">
		<h2 class="label">2. Sprawdź przykład rozwiązania</h2>
		<?php $key="html"; echo get_post_meta($_GET['p'], $key, true); ?>
	</div><!-- /wrap -->
	
<script type="text/javascript">
	$(document).ready(function() { 
		// calculating preview width
		$('#width-control span', top.document).html($(window).width() + ' px');
	});

	$(window).resize(function() {
		$('#width-control span', top.document).html($(window).width() + ' px');
	});
</script>
</body>
</html>