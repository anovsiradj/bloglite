<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<title>Test</title>
</head>
<body>
	<?php bl_section('header') ?>

	<div>

		<div style="width:60%;float:left;background:darksalmon;">
			<?php bl_content() ?>
			<h1><?php echo bl_type() ?></h1>
		</div>

		<div style="width:40%;float:right;background:aqua;">
			<?php bl_section('sidebar') ?>
		</div>
		<div style="clear:both;"></div>

	</div>

	<?php bl_section('footer') ?>

</body>
</html>
