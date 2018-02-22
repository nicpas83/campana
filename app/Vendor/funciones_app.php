<?php

App::import('Vendor', 'funciones/catalogo');
App::import('Vendor', 'funciones/almacen');
App::import('Vendor', 'funciones/arbol');
App::import('Vendor', 'funciones/display_botones');

function getDayName($dayNumber) {
    $dias = ["sunday", "monday", "tuesday", "wednesday", "thursday", "friday", "saturday"];
    return isset($dias[$dayNumber]) ? $dias[$dayNumber] : "";
}

function dashboardDinero($dinero, $showSigno = true) {
    $unidades = [
        ["unit" => "MM", "value" => pow(1000, 3)],
        ["unit" => "M", "value" => pow(1000, 2)],
        ["unit" => "K", "value" => pow(1000, 1)],
        ["unit" => "", "value" => pow(1000, 0)],
    ];
    foreach ($unidades as $unidad) {
        if ($dinero >= $unidad["value"]) {
            if ($dinero >= 100000) {
                $result = $dinero / $unidad["value"];
                $result = strval(round($result, 2)) . $unidad["unit"];
                break;
            } else {
                $result = $dinero;
                break;
            }
        }
    }
    return ($showSigno ? "$ " : "") . $result;
}

//function sinLiquidar($row) {
//      debug($row['Liquidacion']);die;
////    return $row['Liquidacion']['estado'] == null;
//  
//}