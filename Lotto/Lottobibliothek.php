<?php

$br = "<br>";
//getestet
function getAktuellWoche()
{
    $date = date("m/d/y");
    $week = date("w", $date);
    return $week + 1;
}

//getestet

function getAktuellYear()
{
    $date = date("m/d/y");
    $year = date("y", $date);
    $year = substr($date, 6, 3);
    return $year;
}

//getestet
function getWahrscheinlichkeitMitGewinn($numSpiele)
{
    $ergebnis = 1 / $numSpiele;

    return "Deine Wahrscheinlichkeit zu gewinnen ist : " . ($ergebnis * 100) . "%";
}
//Get Datum, nachdem der Spieler jahrelang gespielt hat
//getestet

function getDatumOhneGewinn($years)
{

    $date = date("d/m/");
    $year = getAktuellYear();
    $year += $years;
    return $date . "$year";
}


function getDatumMitGewinn($numSpiele, $malprowoche)
{
    $br = "<br>";

    //5
    $Woche = getAktuellWoche();
    $AnzahlWochen = $numSpiele / $malprowoche;
    echo $AnzahlWochen;
    $FinaleWoche = 0;
    //21
    $Jahr = getAktuellYear();
    $WochenRest = 0;

    //Von 0 bis 150 
    for ($i = 0; $i <= $AnzahlWochen; $i++) {

        //Wenn 55 durch sind, wird das aktuelle Jahr auf 1 gesetzt in Bezug auf das heutige Datum.

        if ($i % 52 == 0 && $i <> 0) {
            $Jahr += 1;
            //WochenRest mit 52 addhiert, um die Woche des Jahres zu ermitteln
            $WochenRest += 52;
        }
    }
    //Wenn kein Jahr vorbei ist, dann ....
    if ($WochenRest <> 0) {

        $Datum = getDatumMitGewinnMehrereJahre($numSpiele, $malprowoche);
        $datum = "Das Datum ist die Woche " . $Datum["Woche"] . " von " . "20" . $Datum["Jahr"];
        return $datum;
    } else if ($WochenRest == 0) {
        $datum = "Das Datum ist " . $i . " von " . $Jahr;

        return $datum;
    } else {
        "error";
    }
}
//getestet
function getDatumMitGewinnMehrereJahre($numSpiele, $malprowoche)
{

    $aktuelleWoche = getAktuellWoche();
    $aktuellesJahr =
        getAktuellYear();
    $wochen = $numSpiele / $malprowoche;

    for ($i = 0; $i < $wochen; $i++) {
        if ($aktuelleWoche == 52) {
            $aktuelleWoche = 1;
            $aktuellesJahr += 1;
        }
        $aktuelleWoche += 1;
    }

    return array("Woche" => $aktuelleWoche, "Jahr" => $aktuellesJahr);
}
