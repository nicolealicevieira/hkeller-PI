<?php
require '../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['submit'])) {
            $nome = $_POST['nome'];
            $cor = $_POST['cor'];
            $sexo = $_POST['sexo'];
            $dtNasc = $_POST['dt_nasc'];
            $tutor = $_POST['tutor'];
            $conn = openCon();
            
            if (isset($_POST['id']) && $_POST['id']>0) {
                $id = $_POST['id'];
                $query = "UPDATE hkeller.caes SET nome='$nome', cor='$cor', dt_nasc='$dtNasc', sexo=$sexo WHERE id=$id;";
                $rs = $conn->query($query);
            } else {
                $query = "INSERT INTO hkeller.caes (nome, cor, dt_nasc, sexo) VALUES('$nome', '$cor', '$dtNasc', $sexo);";
                $rs = $conn->query($query);
            }
            if(isset($tutor)){
                $connT = openCon();
                if (isset($_POST['id']) && $_POST['id']>0) {
                    $id = $_POST['id'];
                    $queryT = "DELETE FROM hkeller.tutor_cao WHERE id_cao='$id';";
                    $rsT = $connT->query($queryT);
                }
                $id = mysqli_insert_id($conn);
                $queryT = "INSERT INTO hkeller.tutor_cao (id_tutor, id_cao) VALUES ('$tutor', '$id');";
                $connT->query($queryT);
            }
            if ($rs==true) {
                header("Location: ../../adm/caes.php");
                die();
            }
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
?>