<?php
$path_site = "/myWebiste/";  // đường dẫn thư mục website, slash đầu và cuối dòng
define('_BASE', $_SERVER['DOCUMENT_ROOT'].$path_site);   // đường dẫn tuyệt đối E:/Wamp/www/myWebsite/
// Smarty config
include _BASE.'includes/smarty/Smarty.class.php';

$smarty = new Smarty;

$smarty->template_dir = _BASE.'/templates/default/';  // template folder
$smarty->compile_dir = _BASE.'/templates_c'; // template cache
$smarty->cache_dir = _BASE.'/cache'; // php cache
$smarty->config_dir = _BASE.'/includes/smarty/config'; // smarty cache
$smarty->compile = true; // end able compiler, debug
?>