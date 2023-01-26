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

function passwordGenerator($passLength, $useAlphabet, $useNumbers, $useSymbols)
{

    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!|\$%&/()=@#.,-*';
    $allCharacters = "";
    if ($useAlphabet) {
        $allCharacters .= $alphabet;
    }
    if ($useNumbers) {
        $allCharacters .= $numbers;
    }
    if ($useSymbols) {
        $allCharacters .= $symbols;
    }

    if ($allCharacters == "") {
        return 'Per favore seleziona almeno un tipo di carattere per la password.';
    }

    $allCharactersLength = strlen($allCharacters) - 1;
    $password = [];

    if ($passLength > 10) {
        return 'La password non può essere generata, troppo lunga, riprova.';
    } else {
        while ((count($password)) < $passLength) {
            $randomIndex = rand(0, $allCharactersLength);
            if (!in_array($allCharacters[$randomIndex], $password)) {
                $password[] = $allCharacters[$randomIndex];
            }
        }
        return 'La tua password è: ' . implode($password);
    }
}


//Finche i caratteri sono meno della lunghezza della password 
//Aggiungi un carattere casuale
// Se l'array dei caratteri non include il carattere appena aggiunto
//aggiungi un nuovo carattere