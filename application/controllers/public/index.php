<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_GET['short'])) {
		$ob = Urls::find_by_shorturl($_GET['short']);
		if(!empty($ob))
			Header("Location: ".$ob->url);
		else
			echo "Invalid Short URL";
	}
?>

<?php include($dir_public.'index.php'); ?>

