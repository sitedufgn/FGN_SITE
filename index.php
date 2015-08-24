<?php 
require 'vendor/autoload.php';
if(isset($_GET['p'])) {
	$p = $_GET['p'];

} else {
	$p = 'home';
}
ob_start();
if($p === 'home') {
	require 'asset/pages/index.php';
}elseif($p === 'news') {
	require 'asset/pages/news.php';
}elseif($p === 'contact') {
	require 'asset/pages/contact.php';
}elseif($p === 'video') {
	require 'asset/pages/video.php';
}elseif($p === 'article') {
	require 'asset/pages/article.php';
}elseif($p === 'connexion') {
	require 'asset/pages/connexion.php';
}elseif($p === 'test') {
	require 'asset/pages/test.php';
}
$content = ob_get_clean();
require 'asset/pages/template/default.php';