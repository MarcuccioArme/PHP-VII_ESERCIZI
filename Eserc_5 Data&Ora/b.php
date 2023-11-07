<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcola giorni trascorsi</title>
</head>
<body>
    
    <h1>Calcola giorni trascorsi</h1>

    <form action="<?php echo($_SERVER["PHP_SELF"]) ?>" method="post">

        <label for="giorno">Giorno:</label>
        <select name="giorno" id="giorno">
            <?php
                for ($i=1; $i<=31; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select> <br><br>

        <label for="mese">Mese:</label>
        <select name="mese" id="mese">
            <?php
                for ($i=1; $i<=12; $i++) {
                    echo "<option value='$i'>$i</option>";
                }
            ?>
        </select> <br><br>

        <label for="anno">Anno:</label>
        <input type="text" name="anno" id="anno"> <br><br>

        <input type="submit" value="clicca qui per il risultato">
        <input type="reset" value="RESET">

    </form>

</body>
</html>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $giorno = $_POST["giorno"];
        $mese = $_POST["mese"];
        $anno = $_POST["anno"];

        $dataDiNascita = date('d-m-Y', strtotime("$giorno-$mese-$anno"));
        $dataCorrente = date('d-m-Y');

        $giorniTrascorsi = round((strtotime($dataCorrente) - strtotime($dataDiNascita)) / (60 * 60 * 24));

        echo "<br>Tra la data di nascita: $dataDiNascita<br>";
        echo "e la data odierna: $dataCorrente<br>";
        echo "sono trascorsi $giorniTrascorsi giorni!!";

    }

?>

// strtotime() ottiene il valore UNIX dei secondi delle date;