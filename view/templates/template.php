<!DOCTYPE html>
<html>
<head>
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="<?= $this->asset('assets/bootstrap-4.0/css/bootstrap.min.css') ?>">
</head>
<body>
	<?= $this->section('content') ?>
</body>
</html>

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="<?= $this->asset('assets/bootstrap-4.0/js/bootstrap.min.js') ?>"></script>