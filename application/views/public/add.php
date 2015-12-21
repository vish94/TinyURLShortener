<?php require_once($dir_public_requires.'header.php'); ?>

<div id="content">
	<h2> Add a new URL </h2>
	<form method="POST" action="<?php echo $dir_site.'add/'?>">
		Domain URL: <input type="text" name="url"><br/>
		<input type="submit" value="submit" name="submit">
	</form>

	<?php
		if(isset($status)) {
			if($status==1) {
				echo "Domain name ".$name." saved.<br/>";
				echo "Short URL: ".$dir_site.$newurl->get_shorturl();
			} else
				echo "Error";
		}
	?>
</div>

<?php require_once($dir_public_requires.'footer.php'); ?>