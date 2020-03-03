<?php
echo " <center><h1>TALLER DE LENGUAJE </h1></center><br>";

$Array1 = ["putuma", "tulcan", "yo", "sanjuan"];
$Array2 = ["mexico", "colom", "clile", "bia"];
$Array3 = ["piña", "naran", "sandia", "durazno", "ja", "melon"];
$Array4 = ["puerto", "roasl", "legui", "san fidel", "la playa", "zamo"];
$Array5 = ["jo", "azul", "verde", "ro", "rosado", "amarillo"];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TALLER 002</title>
</head>

<body>

        <h3>°°CADENAS A EVALUAR°°° </h3>
    </center>
    <h3>ENTRADA:</center> </br> putumayo: <?= implode(',', $Array1) ?>
        <br> SALIDA: <?php echo $Array1[0] ?>,<?php echo $Array1[2] ?></br>

        <br>
        <h3>ENTRADA:</center></br> colombia: <?= implode(',', $Array2) ?>
            <br> SALIDA: <?php echo $Array2[1] ?>,<?php echo $Array2[3] ?></br>
            <br>
            <h3>ENTRADA:</center> </br> naranja: <?= implode(',', $Array3) ?>
                <br> SALIDA: <?php echo $Array3[1] ?>,<?php echo $Array3[4] ?></br>
                <br>
                <h3>ENTRADA:</center> </br> puertoleguizamo: <?= implode(',', $Array4) ?>
                    <br> SALIDA: <?php echo $Array4[0] ?>,<?php echo $Array4[2] ?>,<?php echo $Array4[5] ?></br>
                    <br>
                    <h3>ENTRADA:</center> </br> rojo: <?= implode(',', $Array5) ?>
                        <br> SALIDA: <?php echo $Array5[3] ?>,<?php echo $Array5[0] ?></br>
</body>

</html>