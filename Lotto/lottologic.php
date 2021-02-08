<?php

include  './Lottobibliothek.php';
$arrayKunde = [];
//Lottonummer jedes Mal eingeben
$lottoNummerKunde = 0;
$lottoNummerLottozentral = 0;
//Merkmal Postwerte vorhanden
$errorPost = "Post Werte nicht vorhanden";
$Jahre = 0;
$Woche = 0;
/*
(int)$Preis = 0;
(int)$Preis2=0;
echo $Preis2;

*/
$inflation = 2;

//Validierung
//Post Angaben vorhanden ?
if (isset($_POST["Jahre"]) && isset($_POST["Woche"]) && isset($_POST["Preis"])) {

    //Post Werte vorhanden
    $errorPost = "Post Werte vorhanden";
    //Kundenangaben
    $Jahre = $_POST["Jahre"];
    $Woche = $_POST["Woche"];
    $Preis = (int)($_POST["Preis"]);
} else {

    //Redireccion
    header("Location:formulario.php?error=$errorPost");
}

//Anzahlspielzüge in der Gesamtzeit
$Anzahlspielzug = ($Woche * $Jahre) * 52;
echo "Du spielst $Anzahlspielzug Anzahlspielzüge, $Woche Mal pro Woche in $Jahre Jahren." . "<br>";
$actualwoche_1 = 0;
$jahr_3 = $date = date("y");
$gewonnen = "";

//Für jedes Spiel
for ($i = 0; $i <= $Anzahlspielzug; $i++) {

    //Neue Nummer des Kunden mit rand
    $lottoNummerKunde = rand(0, 9999);

    //Neue Nummer aus der Zentral
    $lottoNummerLottozentral = rand(0, 9999);
    //Falls beide Nummer genauso sind

    if ($lottoNummerKunde == $lottoNummerLottozentral) {
        //Woche, wo der Gewinn ausgelost ist
        //Preis
        //Wahrscheinlichkeit

        $gewonnen = true;
        $PreisMiInflation = $Preis2 * (2 * $Jahre);
        var_dump(array("Datum" => getDatumMitGewinn($Anzahlspielzug, $Woche), "Preis" => "Du must " . $PreisMiInflation . "€ ausgeben, um einen Prämie, zu gewinnen", "Wahrscheinlichkeit" => getWahrscheinlichkeitMitGewinn($Anzahlspielzug)));
        break;
    } else if ($gewonnen == false && $i == $Anzahlspielzug) {

        $PreisMiInflation = $Preis2 * (2 * $Jahre);
        var_dump(array("Datum" => getDatumOhneGewinn($Jahre), "Preis" => "Du wirst " . $PreisMiInflation . "€ ohne Prämie ausgeben", "wahrscheinlichkeit" => "Deine Wahrscheinlichkeit liegt in 1 zwischen 9999 Mal"));
        break;
    }
    //Für jedes Spiel, der Preis wird addhiert
    $Preis2 += $Preis;
}
