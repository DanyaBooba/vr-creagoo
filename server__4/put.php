<?php

# Скрипт отвечает за передачу Json-Данных через GET

if (!empty($_GET)) {
	# Берем значение
	$json_get = $_GET["json"];
	if (!empty($json_get)) {
		var_dump($json_get);
		echo "<br>";
		//$json = json_encode($json_get);

		# Открываем и записываем в файл
		$fileopen = fopen('json_data.txt', 'w');
		fwrite($fileopen, $json_get);
		fclose($fileopen);
	}
} else {
	echo "Json await<br>";
}

$count = 5;
$url = '{"x1": 1, "y1": 1, "z1": 1';
for ($i = 2; $i < $count; $i++) {
	$url .= ', "x' . $i . '": 1';
	$url .= ', "y' . $i . '": 1';
	$url .= ', "z' . $i . '": 1';
}

$url .= "}";


//var_dump($url);
echo "<a href='?json=$url'>Default values</a>";
