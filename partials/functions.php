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

    //Prevedo che l'utente possa non cliccare su nessun checkbox e li metto una condizione per stampare un messaggio qual'ora questo avvenga
    if ($allCharacters == "") {
        return 'Per favore seleziona almeno un tipo di carattere per la password.';
    }
    // Nelc aso in cui ciò non avviene: pirma di tutto vedo quanto è lunga la stringa di tutti i caratteri che ho creato e dichiaro una variabile password come un array 
    $allCharactersLength = strlen($allCharacters) - 1;
    $password = [];

    //Prevedo una condizione per cui l'utente se vuole una password deve inserire una password inferiore o uguale a 10 altrimenti gli torno un messaggio
    if ($passLength > 10) {
        return 'La password non può essere generata, troppo lunga, riprova.';
    } else {

        //Se la password p inferiore a 10 allore faccio un ciclio while
        // Finchè la lunghezza di password è minore della lunghezza definita dall'utente
        //  todo condizione per i dublicati
        // scelgo randomicamente tramite rand un indice della stringa di tutti i caratteri
        // Se l'array password non contiene il carattere all'indice che gli ho indicato prima allora inserisci il carattere nell'array password.
        while ((count($password)) < $passLength) {
            $randomIndex = rand(0, $allCharactersLength);
            if (!in_array($allCharacters[$randomIndex], $password) || $duplicate) {
                $password[] = $allCharacters[$randomIndex];
            }
        }
        // Ritorno l'array password trasfomato in stringa.
        return 'La tua password è: ' . implode($password);
    }
}


//Finche i caratteri sono meno della lunghezza della password 
//Aggiungi un carattere casuale
// Se l'array dei caratteri non include il carattere appena aggiunto
//aggiungi un nuovo carattere