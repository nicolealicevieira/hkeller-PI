<?php

function OpenCon() {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "root";
    $db = "hkeller";
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Conexão falhou: %s\n" . $conn->error);

    return $conn;
}

function CloseCon($conn) {
    $conn->close();
}
?>