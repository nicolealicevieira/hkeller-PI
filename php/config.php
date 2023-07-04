<?php

function openCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "hkeller";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Conexão falhou: %s\n" . $conn->error);

    return $conn;
}

function closeCon($conn) {
    $conn->close();
}

?>