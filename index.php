<?php
$age = 28;
const MAX = 18;
if ($age >= MAX) {
    echo 'Sono maggiorenne e ho piu di 18 anni';
} else if  ($age < MAX){
    echo 'Sono minorenne';
} else {
    echo 'Sono maggiorenne e ho esattamente 18 anni';
}
// --- Esercizio 2---


const BUDGET = 1000; 

$cifra = 1500;

echo "--- $cifra Euros ---\n";
if ($cifra > 0 && $cifra <= BUDGET) {
  
    $rata = $cifra / 3;
    $valore_calcolato = round($rata, 2);

    echo "Paga in 3 comode rate da: $valore_calcolato Euro\n";
    

}
else {
     echo "Complimenti, hai soldi";
}
?>
