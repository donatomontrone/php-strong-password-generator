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

function passwordGenerator($passLength, $useAlphabet, $useNumbers, $useSymbols, $duplicate)
{

    //Se l'utente inserisci più di x caratteri ne ritorno un massimo di 12.
    $passLength = ($passLength > 25) ? 25 : $passLength;

    //dichiaro la varibiabile password.
    $password = '';

    // Dichiaro la variabile vuota dove inserirò parzialmente o totalemtne i caratteri.
    $allCharacters = "";

    // Faccio 3 if per vedere se l'utente ha selezionato o no i checkbox e aggiungo alla variabile allcharacter i caratteri selezionati dall'utente.
    if ($useAlphabet) {
        $allCharacters .= 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
    }
    if ($useNumbers) {
        $allCharacters .= '0123456789';
    }
    if ($useSymbols) {
        $allCharacters .= '!|\$%&/()=@#.,-*';
    }

    // Nel caso in cui ciò non avviene: pirma di tutto vedo quanto è lunga la stringa di tutti i caratteri che ho creato e dichiaro una variabile password come un array 
    $allCharactersLength = strlen($allCharacters);


    //Considero e dichiaro la lunghezza massima che potrà avere la password sulla base dei caratteri.
    $maxLength = ($allCharactersLength > $passLength) ? $passLength : $allCharactersLength;

    //Finchè la lunghezza della mia password sarà inferiore alla lunghezza massima raggiungibile allora:
    // prendo 1 solo carattere randomico da tutti i caratteri disponibili partendo da 0 fino alla all'ultimo carattere (lunghezza -1) 
    //se sono consentiti i duplicati allora inserisci un carattere randomico alla volta nella password altrimenti controlla che la passwrod contenga già il carattere randomico se non lo contiene inseriscilo.
    while (strlen($password) < $maxLength) {
        $randomCharacter = substr($allCharacters, random_int(0, $allCharactersLength - 1), 1);

        if ($duplicate) {
            $password .= $randomCharacter;
        } else {
            if (!str_contains($password, $randomCharacter)) {
                $password .= $randomCharacter;
            }
        }
    }

    return 'La tua password è: ' . $password;
}


//Finche i caratteri sono meno della lunghezza della password 
//Aggiungi un carattere casuale
// Se l'array dei caratteri non include il carattere appena aggiunto
//aggiungi un nuovo carattere



//=============================================================//
/* 
*                         Correzione                             
*/
/* 

function generatePassword($charsNumber)
{

    $charsNumber = ($charsNumber >= 20) ? 20 : $charsNumber;
    $generateString = '';
    $alphaChars = 'asdfghjklopiuytrewazxcvbnm1234567890)(/&%$£"';

    while (strlen($generateString) < $charsNumber)
        $generateString .= substr($alphaChars, random_int(0, strlen($alphaChars) - 1), 1);
    return $generateString;
}


function generateUniquePassword($charsNumber, $hasAlphabet, $hasNumbers, $hasSymbols)
{
    $charsNumber = ($charsNumber >= 20) ? 20 : $charsNumber;
    $generateString = '';

    $alphaChars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!<|\>$%&/()=&@#.,-';

    $genericString = '';

    if ($hasAlphabet) {
        $genericString .= $alphaChars;
    }
    if ($hasNumbers) {
        $genericString .= $numbers;
    }
    if ($hasSymbols) {
        $genericString .= $symbols;
    }

    $maximumLength = (strlen($generateString) > $charsNumber) ? $charsNumber : strlen($generateString);
    while (strlen($generateString) < $maximumLength) {
        $randomEl = substr($alphaChars, random_int(0, strlen($alphaChars) - 1), 1);
        if (!str_contains($generateString, $randomEl)) {
            $generateString .= $randomEl;
        }
    }
    return $generateString;
} */