<?php require_once($dir_public_requires.'header.php'); ?>

<div id="content">
	<h2> All URLs </h2>
	<table>
		<tr>
			<td><b>No.</b></td>
			<td><b>Name</b></td>
			<td><b>TinyUrl</b></td>
		</tr>
		<?php
			$i=1;
			foreach($domains as $domain) {
				echo '<tr>';
				echo '<td>'.$i.'</td>';
				echo '<td>'.$domain->url.'</td>';
				echo '<td>'.$domain->shorturl.'</td>';
				echo '</tr>';
				$i++;
			}
		?>
	</table>
	
</div>

<?php require_once($dir_public_requires.'footer.php'); ?>