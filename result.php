<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <body>
        <header class="mb-4">
            <nav class="navbar bg-primary-subtle">
                <div class="container-fluid">
                    <a class="navbar-brand d-flex align-items-center" href="#">
                        <img src="https://cdn-icons-png.flaticon.com/512/1000/1000915.png" alt="Logo" width="60"
                            height="60">
                        <h1 class="ps-2 mt-3 text-primary">Strong Password Generator</h1>
                    </a>
                </div>
            </nav>
        </header>
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="result">
                            <p class="fw-bold"> <span class="text-primary fw-normal">La tua password è: </span><?php
                                                                                                                echo  $_SESSION['password'];
                                                                                                                ?> </p>
                        </div>
                        <form action="./index.php">
                            <label class="form-label">Torna alla pagina principale per creare una generare
                                password</label>
                            <button type="submit" class="btn btn-secondary">Indietro</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>