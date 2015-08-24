<?php 
if(isset($_GET['p'])) {
	$p = $_GET['p'];

} else {
	$p = 'admin';
}
ob_start();
if($p === 'admin') {
	require 'singup.php';
}elseif($p === 'news') {
	require 'create.php';
}elseif($p === 'wiki') {
	require 'wiki.php';
}
$content = ob_get_clean();
require 'template/default.php';




