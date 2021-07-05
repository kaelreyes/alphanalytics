<!DOCTYPE html>
<html lang="en" class="body-full-height">
<?php
$active='index';
$base_path = $_SERVER['DOCUMENT_ROOT']."/";
// $base_path = $_SERVER['DOCUMENT_ROOT']."/alpha/";
require_once $base_path.'config.php';
?>
<head>
<title><?php echo $index_title;?></title>
<?php
	require_once $base_path.'head.php';
	require_once $base_path.'script-top.php';
?>
</head>
<body>
<?php
	require_once $base_path.'inc/inc.navbar.php';
	require_once $base_path.'inc/inc.service.php';
	require_once $base_path.'inc/inc.footer.php';
?>
</body>
<?php 
require_once $base_path.'script-bottom.php';
?>
</html>