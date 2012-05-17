<?php 
require_once('../../../wp-load.php');
?>
<!DOCTYPE html>
<html lang="en">
<title>Pears  / Footer</title>
<style type="text/css">
<?php $key="css"; echo get_post_meta($_GET['p'], $key, true); ?>
</style>

<?php $key="html"; echo get_post_meta($_GET['p'], $key, true); ?>