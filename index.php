<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1 - DONE
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2 DONE
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<!-- Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all’utente.
Milestone 4 (BONUS)
Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli.
Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
--> <?php
    include_once __DIR__ . '/partials/functions.php';

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

                if (isset($_GET['passwordLength'])) {
                    echo passwordGenerator($_GET['passwordLength']);
                } else {
                    echo 'Inserisci il numero dei caratteri per generare la password';
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