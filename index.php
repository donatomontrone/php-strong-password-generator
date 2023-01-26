<!-- Descrizione
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.
Milestone 1 - DONE
Creare un form che invii in GET la lunghezza della password.
Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
Scriviamo tutto (logica e layout) in un unico file index.php
Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file functions.php che includeremo poi nella pagina principale -->
<!--  -->
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
        <div class="result"> <?php
            include_once __DIR__ . '/partials/functions.php';
            ?> </div>
        <!-- Creo un form per effettuare la get sulla lugnhezza della password -->
        <form method="GET" action="./index.php">
            <label for="password">Inserisci la lunghezza della password</label>
            <input type="number" name="passwordLength" id="password">
            <button type="submit">Genera</button>
        </form>
    </main>
</body>

</html>