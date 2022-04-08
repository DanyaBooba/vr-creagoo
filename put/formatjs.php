<?php
function FormatJS($json)
{
    #start array
    $array = json_decode($json);

    #helpers
    $root = $array->RootNode;
    $obj__1 = $root->Lines;
    $obj__2 = $root->Stations;

    #for list
    $elements = $array->ElementsOK;

    $substation = [
        "GeneratedPower" => Null($root->GeneratedPower),
        "ID" => "Substation",
        "IsON" => true,
        "RequiredPower" => Null($root->RequiredPower),
    ];

    $solarBattery1 = [
        "GeneratedPower" => Null(round($obj__2[0]->GeneratedPower)),
        "ID" => "Solar Battery 1",
        "IsON" =>  IfNull($obj__2[0]->IsON, false),
        "Power" => Null(round($obj__2[0]->Power)),
        "RequiredPower" =>  Null(round($obj__2[0]->RequiredPower)),
    ];

    $miniSubstation1 = [
        "GeneratedPower" => Null($obj__1[2]->Childs[0]->GeneratedPower),
        "ID" => "Mini Substation 1",
        "IsON" => IfNull($obj__1[2]->Childs[0]->IsON, false),
        "RequiredPower" => Null($obj__1[2]->Childs[0]->RequiredPower),
    ];

    $miniSubstation2 = [
        "GeneratedPower" => Null($obj__1[0]->Childs[0]->GeneratedPower),
        "ID" => "Mini Substation 2",
        "IsON" => IfNull($obj__1[0]->Childs[0]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[0]->Childs[0]->RequiredPower),
    ];

    $hospital2 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[0]->GeneratedPower),
        "ID" => "Hospital 2",
        "IsON" => IfNull($obj__1[1]->Childs[0]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[0]->RequiredPower),

    ];

    $factory2 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[2]->GeneratedPower),
        "ID" => "Factory 2",
        "IsON" => IfNull($obj__1[1]->Childs[2]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[2]->RequiredPower),

    ];

    $house1 = [
        "GeneratedPower" => Null($obj__1[0]->Childs[0]->Childs[1]->Childs[0]->GeneratedPower),
        "ID" => "Microdistrict 1",
        "IsON" => IfNull($obj__1[0]->Childs[0]->Childs[1]->Childs[0]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[0]->Childs[0]->Childs[1]->Childs[0]->RequiredPower),

    ];

    $house2 = [
        "GeneratedPower" => Null($obj__1[0]->Childs[0]->Childs[1]->Childs[1]->GeneratedPower),
        "ID" => "Microdistrict 2",
        "IsON" => IfNull($obj__1[0]->Childs[0]->Childs[1]->Childs[1]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[0]->Childs[0]->Childs[1]->Childs[1]->RequiredPower),

    ];

    $house3 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[3]->GeneratedPower),
        "ID" => "Microdistrict 3",
        "IsON" => IfNull($obj__1[1]->Childs[3]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[3]->RequiredPower),

    ];

    $house4 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[4]->GeneratedPower),
        "ID" => "Microdistrict 4",
        "IsON" => IfNull($obj__1[1]->Childs[4]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[4]->RequiredPower),

    ];

    $house5 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[5]->GeneratedPower),
        "ID" => "Microdistrict 5",
        "IsON" => IfNull($obj__1[1]->Childs[5]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[5]->RequiredPower),

    ];

    $house6 = [
        "GeneratedPower" => Null($obj__1[1]->Childs[1]->GeneratedPower),
        "ID" => "Microdistrict 6",
        "IsON" => IfNull($obj__1[1]->Childs[1]->IsON, false),
        "Power" => Null($obj__2[0]->Power),
        "RequiredPower" => Null($obj__1[1]->Childs[1]->RequiredPower),

    ];

    $factory1 = [
        "GeneratedPower" => Null(round($obj__1[1]->Childs[1]->GeneratedPower)),
        "ID" => "Factory 1",
        "IsON" => IfNull($obj__1[1]->Childs[1]->IsON, false),
        "Power" => Null(round($obj__2[0]->Power)),
        "RequiredPower" => Null(round($obj__1[1]->Childs[1]->RequiredPower)),

    ];

    $hospital1 = [
        "GeneratedPower" => Null(round($obj__1[2]->Childs[0]->Childs[1]->Childs[0]->GeneratedPower)),
        "ID" => "Hospital 1",
        "IsON" => IfNull($obj__1[2]->Childs[0]->Childs[1]->Childs[0]->IsON, false),
        "Power" => Null(round($obj__2[0]->Power)),
        "RequiredPower" => Null(round($obj__1[2]->Childs[0]->Childs[1]->Childs[0]->RequiredPower)),

    ];

    $solarBattery2 = [
        "GeneratedPower" => Null(round($obj__2[4]->GeneratedPower)),
        "ID" => "Solar Battery 2",
        "IsON" => IfNull($obj__2[4]->IsON, false),
        "Power" => Null(round($obj__2[0]->Power)),
        "RequiredPower" => Null(round($obj__2[4]->RequiredPower)),

    ];

    $windGenerator = [
        "GeneratedPower" => Null(round($obj__2[2]->GeneratedPower)),
        "ID" => "Wind Generator",
        "IsON" => IfNull($obj__2[2]->IsON, false),
        "Power" => Null(round($obj__2[0]->Power)),
        "RequiredPower" => Null(round($obj__2[2]->RequiredPower)),

    ];

    #final array
    $final = [
        "substation" => $substation,
        "solarBattery1" => $solarBattery1,
        "miniSubstation1" => $miniSubstation1,
        "miniSubstation2" => $miniSubstation2,
        "hospital2" => $hospital2,
        "factory2" => $factory2,
        "house1" => $house1,
        "house2" => $house2,
        "house3" => $house3,
        "house4" => $house4,
        "house5" => $house5,
        "house6" => $house6,
        "factory1" => $factory1,
        "hospital1" => $hospital1,
        "solarBattery2" => $solarBattery2,
        "windGenerator" => $windGenerator,
    ];

    $final = json_encode($final);

    #
    return $final;
}

function Null($data)
{
    if (empty($data)) return "null";
    return $data;
}

function IfNull($d1, $d2)
{
    if (empty($d1)) return $d2;
    return $d1;
}
