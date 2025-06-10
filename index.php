<?php
$age = 38;
const MAX = 18;
if ($age >= MAX) {
    echo "Sono maggiorenne e ho piu di 18 anni.\n";
} else if  ($age < MAX){
    echo "Sono minorenne.\n";
} else {
    echo "Sono maggiorenne e ho esattamente 18 anni.\n";
}

// --- Esercizio 1---

const BUDGET = 1000; 

$cifra = 1300;

if ($cifra > 0 && $cifra <= BUDGET) {
  
    $rata = $cifra / 3;
    $valore_calcolato = round($rata, 2);

    echo "Paga in 3 comode rate da: $valore_calcolato Euro\n";
    
}
else {
     echo "Complimenti, hai soldi.\n";
}

// ---Esercizio 2---

$anno_corrente = (int) date('Y');

$anno_nascita = 1988;

$eta_calcolata = $anno_corrente - $anno_nascita;

if ($eta_calcolata < 0) {
    echo "Il numero da te inserito non può essere elaborato. L'anno di nascita è nel futuro.\n";
} elseif ($eta_calcolata >= 0 && $eta_calcolata <= 3) {
    
    echo "Troppo piccolo per scrivere a macchina.\n";
} else { 
    echo "Il nostro sistema ha calcolato che hai: Hai $eta_calcolata anni.\n";
}

// ---Esercizio 3---

$posizione = 'pizza';
$posizione = 'birra';
$posizione = 'insalata'; //non disponibile
$posizione = 'panino';
$posizione = 'dessert';

switch ($posizione) {

    case 'pizza':
        echo "Hai ordinato Pizza con un costo di 6 Euro.\n";
        break;
    case 'birra':
        echo "Hai ordinato Birra con un costo di 3 Euro.\n";
        break;
    case 'insalata':
        echo "Non disponibile.\n";
        break;
    case 'panino':
        echo "Hai ordinato Panino con un costo di 8 Euro.\n";
        break;
    case 'dessert':
        echo "Hai ordinato Dessert con un costo di 3 Euro.\n";
        break;
      
}
// ---Esercizio 4---

$arrayNumeri = [0,1,2,3,4,5,6,7,8,9,10];
$somma = 0;

for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        $somma += $i; 
    }
}
echo "Il risultato: $somma \n"; 

?>
