<?php
if(!empty($_GET)){
	#Берем дату
	$data__get=$_GET;
	var_dump($data__get);

	#Парсим в JSON
	$data__json = json_encode($data__get);

	#Открываем файл для записи в него данных
	$file__data = fopen('data.txt', 'w');
	fwrite($file__data, $data__json);
	fclose($file__data); 
}
else{
	echo "Await your data";
}

$stop = 20;
$example__str = "?";
for($i = 1; $i <= $stop; $i++){
	$k = $i; $k += 1;
	$example__str .= "x$i=$k&y$i=$k&";
}

echo "
<br><a href='$example__str'>You want example?</a><br>
<a href='?'>Clear</a><br>
<a href='index.html'>Go Main</a>
";


?>