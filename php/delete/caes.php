<?php
require '../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $conn = openCon();
            $query = "UPDATE hkeller.caes SET fg_status='0' WHERE id=$id;";
            $conn->query($query);
            header("Location: ../../adm/caes.php");
            die();
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
?>