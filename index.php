<?php
    $title = 'PHP Badwords';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <title>PHP Badwords</title>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>
                            <?php echo $title ?>
                        </h1>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <form action="censored.php" method="get">
                    <div class="row my-5">
                        <div class="col-6">
                            <label for="control-label">Testo</label>
                            <input type="text" id="my-paragraph" class="form-control" name="paragraph" placeholder="Inserisci il testo...">
                        </div>
                        <div class="col-6">
                            <label for="control-label">Censura</label>
                            <input type="text" id="my-censored" class="form-control" name="censored" placeholder="Inserisci la parola da censurare...">
                        </div>
                    </div>
                    <div class="row my-1">
                        <div class="col-12">
                            <button class="btn btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </body>
</html>