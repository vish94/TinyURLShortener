<?ob_start(); ?>
<?php include("set.php"); ?>

<?php
	if(isset($_POST['submit'])) {
		if(($_POST['url'])!="") {
			$name = $_POST['url'];
			$newurl = Urls::make($name);
			if($newurl->save()) {
				$short = base62($newurl->get_id());
				$newurl->set_shorturl($short);
				$newurl->save();
				$status = 1;
			} else
				$status = 0;
		}
	}
?>

<?php include($dir_public.'add.php'); ?>

