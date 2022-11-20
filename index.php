<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Caracteres</title>
</head>

<body>
 
        <div class="titulo">
            <h1>Digite uma palavra: </h1>
        </div>
        <form method="POST">
                <p class="input">
                    <input type="text" name="palavra" />
                </p>
 
            <button class="resultado">Resultado</button> <br>

            <?php
            if (isset($_POST['palavra'])) {
                $palavra = $_POST['palavra'];
                $tamanho = strlen($palavra);

                for ($l = 1; $l <= $tamanho; $l++) {
                    echo "<br>";
                    for ($c=1; $c <= $l; $c++) {
                        echo $palavra." ";
                    }
                }
            }

            ?>

</body>

</html>