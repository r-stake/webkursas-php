<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASWORD", "");
    define("DB_NAME", "baigiamojo_forma");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo 'Klaida: ' . $mysqli->connect_error;
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO registracija (vardas, pavarde, telefonas, email, message, journey)
    VALUES ('$_POST[vardas]', '$_POST[pavarde]', '$_POST[telefonas]', '$_POST[email]', '$_POST[message]', '$_POST[journey]')");