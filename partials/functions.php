<?php
/* // Creo delle variabili che contengono tutti i caratteri possibili che la password randomica deve contenere.
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!<|\>$%&/()=&@#.,-';

! Se l'utente ha inserito il numero prendo la lugnhezza data dall'input dell'utente.
if (isset($_GET['passwordLength'])) {
    $password_length = $_GET['passwordLength'];
    !unisco tutti i caratteri in un unica variabile 
    $allCharacters = $alphabet . $numbers . $symbols;
    !uso substr per generare una password dai caratteri partendo dal carattere 0, lunga quando specificato dall'utente. Attraverso str_shuffle la mischio.
    $password = substr(str_shuffle($allCharacters), 0, $password_length);
    echo '<p>';
    echo $password;
    echo '</p>';
    !Se l'utente non ha inserito la lunghezza della password genero un messaggio.
} else {
    echo '<p>';
    echo 'Inserisci la lughezza della tua password per generare la password';
    echo '</p>';
} */


//Creo una funzione che faccia il tutto

function passwordGenerator($passLength)
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!<|\>$%&/()=&@#.,-';
    $allCharacters = $alphabet . $numbers . $symbols;
    $password = substr(str_shuffle($allCharacters), 0, $passLength);
    return $password;
}