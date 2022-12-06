<?php

$aanhef = array(
    "aanhef" => "Beste",
    "klant" => "Abdallah");

$korting = array(
    "product" => "U heeft in de voorgaande bestelling voor [[product]] gekozen",
    "korting" => "Bij Uw volgende bestelling kunnen we U een korting van 10% aanbieden op hetzelfde product"
);

$bedrijf = "bedrijf";

$ondertekening = array(
  "groet" => "Met vriendelijke groet",
  "naam" => "Abdallah",
  "functie" => "Directeur Webshop beheer"
);






/*
 * Opdracht 1:
 * Laat de inhoud van alle arrays zien
 * Gebruik daarvoor de functies var_dump() en print_r()
 */
var_dump($ondertekening);
echo "<pre>";
print_r($ondertekening);
echo "</pre>";
/*
 * Opdracht 2:
 * Vervang de waarde van persoon, in de array aanhef naar 'klant'
 * Vervang de waarde van naam, in de array ondertekening naar 'jouw naam'
 */
var_dump( $aanhef);
echo "<pre>";
print_r($aanhef);
echo "</pre>";
/*
 * Opdracht 3:
 * Vervang het woord [[product]] door jouw gekozen product in de winkelmand opdracht
 * Gebruik hiervoor de methode str_replace().
 */
print_r($korting);
echo "<pre>";
var_dump( $korting);
echo "</pre>";
echo str_replace('[[product]]', '[[product]]', $bedrijf );
/*
 * Opdracht 4:
 * Voeg nu alle arrays samen in een nieuwe array die je $aanbieding noemt.
 * Gebruik hiervoor de methode array_merge()
 */
$aanbieding = [
  "klein" => "een kleine aanbieding",
  "grote" => "een grote aanbieding"
];
/*
 * Opdracht 5:
 * Toon de inhoud van de nieuwe array $aanbieding
 */
echo "<pre>";
var_dump(array_merge($aanbieding));
echo "</pre>";
?>