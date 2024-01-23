<?php
    $paragraph = $_GET['paragraph'];
    $censored = $_GET['censored'];
    $title = 'PHP Badwords';

    $para_len = strlen($paragraph);
    $new_paragraph = str_replace($censored, '***', $paragraph);
    $new_para_len = strlen($new_paragraph);
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
                <div class="row my-5">
                    <div class="col-12">
                        <h2>Testo originale</h2>
                        <div class="text-container">
                            <p>
                                <?php echo $paragraph ?>
                            </p>
                        </div>
                        <h3>
                            <?php echo "Numero di caratteri: " .$para_len ?>
                        </h3>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-12">
                        <h2>Testo censurato</h2>
                        <div class="text-container">
                            <p>
                                <?php echo $new_paragraph ?>
                            </p>
                        </div>
                        <h3>
                            <?php echo "Numero di caratteri: " .$new_para_len ?>
                        </h3>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>