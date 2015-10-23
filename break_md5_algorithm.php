<?php
//just break the md5 algorithm and make a collision ;)
$flag = "OKOKOKOKOKOKOK这个flag";
include('config.php');
if(empty($_GET['md5'])) die(show_source(__FILE__));
if($_GET['md5']!='400035577431' && md5($_GET['md5']) == md5('400035577431')) {
	echo $flag;
}else {
	echo 'md5='.$_GET['md5'].'<br>';
	echo 'md5($_GET[\'md5\'])   = '.md5($_GET['md5']).'<br>';
	echo 'md5(\'400035577431\') = '.md5('400035577431').'<br>';
}
?>