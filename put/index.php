<?php

include_once "formatjs.php";

# Скрипт отвечает за передачу Json-данных через GET
$path = "../json/index.txt";

if (!empty($_GET)) {
    # Берем значение
    $json_get = $_GET["q"];
    if (!empty($json_get)) {
        #Дебажим
        echo "<div style='display: none'>";
        var_dump($json_get);
        echo "</div>";

        $editjs = FormatJS($json_get);

        var_dump($editjs);

        # Открываем, записываем в файл, закрываем
        $fileopen = fopen($path, 'w');
        fwrite($fileopen, $editjs);
        fclose($fileopen);
    } else {
        echo "Json await...";
    }
} else {
    #Если нет JSON
    echo "Json await...";
}

$jsondefault = '{"ElementsOK":true,"Lamp1val":8,"Lamp2val":89,"RootNode":{"GeneratedPower":169.74297924297926,"Lines":[{"Childs":[{"Childs":[{"Childs":[{"Childs":null,"GeneratedPower":0,"ID":"Завод №1","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":100,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП2.1","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1},{"Childs":[{"Childs":null,"GeneratedPower":0,"ID":"Микро район №1","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":82,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Микро район №2","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":75,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП2.2","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП2","IsON":true,"ObjectType":3,"Power":0,"RequiredPower":0,"SocketNum":-1}],"GeneratedPower":56.580993080993089,"ID":"П1","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1},{"Childs":[{"Childs":null,"GeneratedPower":0,"ID":"Больница №2","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":60,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Завод №1","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":100,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Завод №2","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":52,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Микро район №3","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":20,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Микро район №4","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":9,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Микро район №5","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":94,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Микро район №6","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":98,"SocketNum":-1}],"GeneratedPower":56.580993080993089,"ID":"П2","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1},{"Childs":[{"Childs":[{"Childs":[{"Childs":null,"GeneratedPower":0,"ID":"Больница №2","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":60,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП1.1","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1},{"Childs":[{"Childs":null,"GeneratedPower":0,"ID":"Больница №1","IsON":true,"ObjectType":0,"Power":100,"RequiredPower":28.000000000000004,"SocketNum":-1},{"Childs":null,"GeneratedPower":0,"ID":"Завод №2","IsON":false,"ObjectType":0,"Power":100,"RequiredPower":52,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП1.2","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1}],"GeneratedPower":0,"ID":"МП1","IsON":true,"ObjectType":3,"Power":0,"RequiredPower":0,"SocketNum":-1}],"GeneratedPower":56.580993080993089,"ID":"П3","IsON":false,"ObjectType":1,"Power":0,"RequiredPower":0,"SocketNum":-1}],"RequiredPower":0,"Stations":[{"Childs":null,"GeneratedPower":53.504273504273506,"ID":"СБ1","IsON":true,"ObjectType":2,"Power":100,"RequiredPower":0,"SocketNum":-1},null,{"Childs":null,"GeneratedPower":99.3888888888889,"ID":"ВГ1","IsON":true,"ObjectType":2,"Power":100,"RequiredPower":0,"SocketNum":-1},null,{"Childs":null,"GeneratedPower":16.84981684981685,"ID":"СБ2","IsON":true,"ObjectType":2,"Power":100,"RequiredPower":0,"SocketNum":-1},null]},"TreeOK":true,"Windval":99}';
echo "<br><a href='?q=$jsondefault'>Default values</a>";
