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
    session_start();
    include_once __DIR__ . '/partials/functions.php';
    if (isset($_GET['passwordLength']) && $_GET['passwordLength']) {
        $password =  passwordGenerator($_GET['passwordLength']);
        $_SESSION['password'] = $password;
        header('Location: ./result.php');
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <header class="mb-4">
        <nav class="navbar bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="https://cdn-icons-png.flaticon.com/512/1000/1000915.png" alt="Logo" width="60"
                        height="60">
                    <h1 class="ps-2 mt-3 text-primary">Password Generator</h1>
                </a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11">
                    <form method="GET" action="./index.php">
                        <div class=" mb-3">
                            <label for="password" class="form-label">Inserisci la lunghezza della password</label>
                            <input type="number" class="form-control mb-3" name="passwordLength" id="password">
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="numbers" id="numbers" value="1">
                            <label for="numbers" class="form-label">Numeri</label>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="letters" id="letters" value="1">
                            <label for="letters" class="form-label">Lettere</label>
                        </div>
                        <div class="mb-3">
                            <input type="checkbox" name="symbols" id="symbols" value="1">
                            <label for="symbols" class="form-label">Simboli</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Genera</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Creo un form per effettuare la get sulla lugnhezza della password -->
    </main>
</body>

</html>