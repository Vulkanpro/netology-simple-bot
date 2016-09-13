<?php

$name ='Герман';
$age = 26;
$email = 'thustmaster@mail.ru';
$city = 'Москва';
$about_yourself = 'Профессия: сео оптимизатор, директолог. Начинающий верстальщик сайтов.<br>Хочу обладать большими возможностями для создания уникальных сайтов';

?>

<!DOCTYPE html>
<html lang="ru">

<head>

<meta charset="utf-8">
		
<style>body{font-family:sans-serif;font-size:16px}dl dt{float:left;font-weight:bold;padding:5px;width:250px;}dl dd{margin:5px 0;padding:5px 0}</style>

</head>

<body>

<dl>
	<dt>Имя:</dt>
	<dd><?= $name ?></dd>
	<dt>Возраст:</dt>
	<dd><?= $age ?></dd>
	<dt>Адрес электронной почты:</dt>
	<dd><?= $email ?></dd>
	<dt>Город:</dt>
	<dd><?= $city ?></dd>
	<dt>О себе:</dt>
	<dd><?= $about_yourself ?></dd>
</dl>

</body>

</html>
