<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $conferma_password = $_POST["conferma_password"];

        $salt = rand(10,128);

        $password = crypt($password,$salt);
        $conferma_password = crypt($conferma_password,$salt);

        if ($password == $conferma_password) {

            echo "<h1>Dati inseriti</h1>";

            echo "<table border=1>";
            echo "<tr>
                    <td>Nome:</td>
                    <td>$nome</td>
                </tr>";
            echo "<tr>
                    <td>Email:</td>
                    <td>$email</td>
                </tr>";
            echo "</table>";

        } else {
            echo "<b>Errore:</b> Le password non coincidono.";
        }

    }

?>