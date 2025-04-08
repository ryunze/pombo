<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= Post::get('title') . ' | ' . WEB_NAME ?></title>
</head>
<body>
	<?= Post::get('title') ?>
	<?= Post::get('content') ?>
</body>
</html>