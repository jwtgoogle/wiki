<?php

include('config.php');
$flag = 'OKOKOK'."<br>";
if(empty($_GET['user'])) die(show_source(__FILE__));
$user = ['admin', '1445053257'];
if($_GET['user'] === $user && $_GET['user'][0] != 'admin'){ 
	echo $flag;
} else  {
	var_dump($_GET['user']);
	var_dump($user);
	echo $user.'<br>';
	//user[]=userstring&tag_name[]=新鲜
	echo '$_GET[\'user\'] = '.$_GET['user'].'<br>';
	echo '$_GET[\'user\'][0] = '.$_GET['user'][0].'<br>';
}
?>