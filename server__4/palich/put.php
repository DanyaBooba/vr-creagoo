<?php

# Скрипт отвечает за передачу Json-Данных через GET

if (!empty($_GET)) {
	# Берем значение
	$json_get = $_GET["json"];
	var_dump($json_get);

	# Открываем файл
	$fileopen = fopen('json_data.txt', 'w');
}

/*
if(isset($_GET))
{
	$data=$_GET;
	print_r($_GET);
	$fp = fopen('./data.txt', 'w');
	fwrite($fp, json_encode($data));
	fclose($fp); 
}
*/
