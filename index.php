<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale --> <?php
// Creo delle variabili che contengono tutti i caratteri possibili che la password randomica deve contenere.
$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHILJKMNOPQRSTUVWXYZ';
$numbers = '0123456789';
$symbols = '!£>$%&/()=&#167;@#.,-';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <main>
        <div class="result">
            <p> <?php
                // Se l'utente ha inserito il numero prendo la lugnhezza data dall'input dell'utente.
                if (isset($_GET['passwordLength'])) {
                    $password_length = $_GET['passwordLength'];
                    //unisco tutti i caratteri in un unica variabile 
                    $allCharacters = $alphabet . $numbers . $symbols;
                    //uso substr per generare una password dai caratteri partendo dal carattere 0, lunga quando specificato dall'utente. Attraverso str_shuffle la mischio.
                    $password = substr(str_shuffle($allCharacters), 0, $password_length);
                    echo $password;
                    //Se l'utente non ha inserito la lunghezza della password genero un messaggio.
                } else {
                    echo '<p>';
                    echo 'Inserisci la lughezza della tua password per generare la password';
                    echo '</p>';
                }

                ?> </p>
        </div>
        <!-- Creo un form per effettuare la get sulla lugnhezza della password -->
        <form method="GET" action="./index.php">
            <label for="password">Inserisci la lunghezza della password</label>
            <input type="number" name="passwordLength" id="password">
            <button type="submit">Genera</button>
        </form>
    </main>
</body>

</html>