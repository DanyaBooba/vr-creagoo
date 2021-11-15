<?php

# Скрипт отвечает за передачу Json-Данных через GET

if (!empty($_GET)) {
	# Берем значение
	$json_get = $_GET["json"];
	if (!empty($json_get)) {
		var_dump($json_get);
		$json = json_encode($json_get);

		# Открываем и записываем в файл
		$fileopen = fopen('json_data.txt', 'w');
		fwrite($fileopen, json_encode($json));
		fclose($fileopen);
	}
} else {
	echo "Json await";
}
