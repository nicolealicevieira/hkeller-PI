<?php
require '../config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['submit'])) {
            $idTutor = $_POST['id_tutor'];
            $idCao= $_POST['id_cao'];
            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $dtIni = $_POST['dt_ini'];
            $dtFim = $_POST['dt_fim'];
            $conn = openCon();
            
            if (isset($_POST['id']) && $_POST['id']>0) {
                $id = $_POST['id'];
                $query = "UPDATE hkeller.atividade_cao SET titulo='$titulo', descricao='$texto', dt_ini='$dtIni', dt_fim='$dtFim' WHERE id=$id;";
                $rs = $conn->query($query);
            } else {
                $query = "INSERT INTO hkeller.atividade_cao (id_tutor, id_cao, titulo, descricao, dt_ini, dt_fim) VALUES($idTutor, $idCao,'$titulo', '$texto', '$dtIni', '$dtFim');";
                $rs = $conn->query($query);
            }
            if ($rs==true) {
                header("Location: ../../tutor/caes.php");
                die();
            }
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
?>