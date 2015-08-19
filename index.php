<?php 
if(isset($_GET['p'])) {
	$p = $_GET['p'];

} else {
	$p = 'home';
}
// ob_start();
if($p === 'home') {
	require 'asset/pages/index.html';
}elseif($p === 'about') {
	require 'asset/pages/about.html';
}elseif($p === 'contact') {
	require 'asset/pages/contact.html';
}
// $content = ob_get_clean();
// require 'asset/pages/template/default.php';