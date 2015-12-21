<?ob_start(); ?>
<?php include("set.php"); ?>

<?php

	$domains = Urls::find_all();

?>

<?php include($dir_public.'show.php'); ?>

