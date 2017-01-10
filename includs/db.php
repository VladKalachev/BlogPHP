<?php 

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if ($connection == fulse) 
{
	echo "Не удалось подключиться к безе данных!<br>";
	echo mysqli_connect_error();
	exit();
} 




