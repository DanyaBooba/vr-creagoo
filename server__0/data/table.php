<?php

function IsOn($value)
{
    if ($value == true) {
        return "Включен";
    } else if ($value == false) {
        return "Выключен";
    } else {
        return IsOn(false);
    }
}

$examplejson = file_get_contents('json_data.txt');
$parsejson = json_decode($examplejson, true);

$example = [
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
    [
        "name" => "erh",
        "ison" => "true",
        "genpow" => "100",
        "reqpow" => "421",
        "pow" => "125"
    ],
];

$home__1 = $parsejson["RootNode"]["Lines"][0]["Childs"][0]["Childs"][1]["Childs"][0];
$home__2 = $parsejson["RootNode"]["Lines"][0]["Childs"][0]["Childs"][1]["Childs"][1];
$home__3 = $parsejson["RootNode"]["Lines"][1]["Childs"][3];
$home__4 = $parsejson["RootNode"]["Lines"][1]["Childs"][4];
$home__5 = $parsejson["RootNode"]["Lines"][1]["Childs"][5];
$home__6 = $parsejson["RootNode"]["Lines"][1]["Childs"][6];

$factory__1 = $parsejson["RootNode"]["Lines"][0]["Childs"][0]["Childs"][0]["Childs"][0];
$factory__2 = $parsejson["RootNode"]["Lines"][1]["Childs"][2];

$minienergy__1 = $parsejson["RootNode"]["Lines"][2]["Childs"][0];
$minienergy__2 = $parsejson["RootNode"]["Lines"][0]["Childs"][0];

$hospital__1 = $parsejson["RootNode"]["Lines"][2]["Childs"][0]["Childs"][1]["Childs"][0];
$hospital__2 = $parsejson["RootNode"]["Lines"][1]["Childs"][0];

$solarBattery__1 = $parsejson["RootNode"]["Stations"][0];
$solarBattery__2 = $parsejson["RootNode"]["Stations"][4];

$windGenerator = $parsejson["RootNode"]["Stations"][2];

$array_json = [
    [
        "1",
        "name" => "Подстанция",
        "ison" => true,
        "genpow" => $parsejson["RootNode"]["GeneratedPower"],
        "reqpow" => $parsejson["RootNode"]["RequiredPower"],
    ],
    [
        "2",
        "name" => "Солнечная Батарея 1",
        "ison" => $solarBattery__1["IsON"],
        "genpow" => $solarBattery__1["GeneratedPower"],
        "reqpow" => $solarBattery__1["RequiredPower"],
        "pow" => $solarBattery__1["Power"]
    ],
    [
        "3",
        "name" => "Мини Подстанция 1",
        "ison" => $minienergy__1["IsON"],
        "genpow" => $minienergy__1["GeneratedPower"],
        "reqpow" => $minienergy__1["RequiredPower"],
        "pow" => $minienergy__1["Power"]
    ],
    [
        "4",
        "name" => "Мини Подстанция 2",
        "ison" => $minienergy__2["IsON"],
        "genpow" => $minienergy__2["GeneratedPower"],
        "reqpow" => $minienergy__2["RequiredPower"],
        "pow" => $minienergy__2["Power"]
    ],
    [
        "5",
        "name" => "Больница 2",
        "ison" => $hospital__2["IsON"],
        "genpow" => $hospital__2["GeneratedPower"],
        "reqpow" => $hospital__2["RequiredPower"],
        "pow" => $hospital__2["Power"]
    ],
    [
        "6",
        "name" => "Завод 2",
        "ison" => $factory__2["IsON"],
        "genpow" => $factory__2["GeneratedPower"],
        "reqpow" => $factory__2["RequiredPower"],
        "pow" => $factory__2["Power"]
    ],
    [
        "7",
        "name" => "Микрорайон 1",
        "ison" => $home__1["IsON"],
        "genpow" => $home__1["GeneratedPower"],
        "reqpow" => $home__1["RequiredPower"],
        "pow" => $home__1["Power"]
    ],
    [
        "8",
        "name" => "Микрорайон 2",
        "ison" => $home__2["IsON"],
        "genpow" => $home__2["GeneratedPower"],
        "reqpow" => $home__2["RequiredPower"],
        "pow" => $home__2["Power"]
    ],
    [
        "9",
        "name" => "Микрорайон 3",
        "ison" => $home__3["IsON"],
        "genpow" => $home__3["GeneratedPower"],
        "reqpow" => $home__3["RequiredPower"],
        "pow" => $home__3["Power"]
    ],
    [
        "10",
        "name" => "Микрорайон 4",
        "ison" => $home__4["IsON"],
        "genpow" => $home__4["GeneratedPower"],
        "reqpow" => $home__4["RequiredPower"],
        "pow" => $home__4["Power"]
    ],
    [
        "11",
        "name" => "Микрорайон 5",
        "ison" => $home__5["IsON"],
        "genpow" => $home__5["GeneratedPower"],
        "reqpow" => $home__5["RequiredPower"],
        "pow" => $home__5["Power"]
    ],
    [
        "12",
        "name" => "Микрорайон 6",
        "ison" => $home__6["IsON"],
        "genpow" => $home__6["GeneratedPower"],
        "reqpow" => $home__6["RequiredPower"],
        "pow" => $home__6["Power"]
    ],
    [
        "13",
        "name" => "Завод 1",
        "ison" => $factory__1["IsON"],
        "genpow" => $factory__1["GeneratedPower"],
        "reqpow" => $factory__1["RequiredPower"],
        "pow" => $factory__1["Power"],
    ],
    [
        "14",
        "name" => "Больница 1",
        "ison" => $hospital__1["IsON"],
        "genpow" => $hospital__1["GeneratedPower"],
        "reqpow" => $hospital__1["RequiredPower"],
        "pow" => $hospital__1["Power"]
    ],
    [
        "15",
        "name" => "Солнечная Батарея 2",
        "ison" => $solarBattery__2["IsON"],
        "genpow" => $solarBattery__2["GeneratedPower"],
        "reqpow" => $solarBattery__2["RequiredPower"],
        "pow" => $solarBattery__2["Power"]
    ],
    [
        "16",
        "name" => "Ветрогенератор",
        "ison" => $windGenerator["IsON"],
        "genpow" => $windGenerator["GeneratedPower"],
        "reqpow" => $windGenerator["RequiredPower"],
        "pow" => $windGenerator["Power"]
    ],
];

?>

<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebVR Table</title>

    <style>
        table {
            margin: 0 auto;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 90%;
            padding: 50px;

        }

        .table tr,
        .table td {
            font-size: 1.5rem;
        }

        td,
        th {
            border: 1px solid #f4f4f4;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f6f6f6;
        }

        .empty {
            color: #949494;
        }
    </style>

</head>

<body>
    <h1>WebVR Table</h1>

    <div id="table" class="table" style="margin: 0 auto; margin-top: 10rem; margin-bottom: 10rem;">
        <table>
            <tr>
                <th>#</th>
                <th>Element</th>
                <th>IS ON</th>
                <th>Generated Power, kWt</th>
                <th>Required Power, kWt</th>
                <th>Power, kWt</th>
            </tr>

            <?php for ($i = 0; $i < count($array_json); $i++) : ?>
                <?php $public = $i;
                $public += 1; ?>
                <?php $link = $array_json ?>
                <tr>
                    <td>
                        <?php echo $public ?>
                    </td>
                    <td>
                        <?php
                        if (isset($link[$i]["name"])) echo $link[$i]["name"];
                        else echo "<i class='empty'>Null</i>";
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($link[$i]["ison"])) echo IsOn($link[$i]["ison"]);
                        else echo "<i class='empty'>Null</i>";
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($link[$i]["genpow"])) echo $link[$i]["genpow"];
                        else echo "<i class='empty'>Null</i>";
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($link[$i]["reqpow"])) echo $link[$i]["reqpow"];
                        else echo "<i class='empty'>Null</i>";
                        ?>
                    </td>
                    <td>
                        <?php
                        if (isset($link[$i]["pow"])) echo $link[$i]["pow"];
                        else echo "<i class='empty'>Null</i>";
                        ?>
                    </td>
                </tr>

            <?php endfor; ?>

        </table>
    </div>

</body>

</html>