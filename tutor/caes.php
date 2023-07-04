<?php
require '../php/config.php';
$conn = openCon();
$query = "SELECT c.id, c.nome, us.nome as nome_do_tutor, c.cor, c.dt_nasc, c.sexo, c.fg_status, c.dt_reg, c.dt_up FROM hkeller.caes as c inner join hkeller.tutor_cao as tc on tc.id_cao=c.id inner join hkeller.usuario as us on us.id=tc.id_tutor where c.fg_status=1";
$rs = $conn->query($query);

$queryHist = "SELECT * FROM hkeller.atividade_cao";
$rsHist = $conn->query($queryHist);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Escola HKeller - Cães Guia</title>
    <meta name="twitter:image" content="/assets/img/logos/logo.svg">
    <meta name="twitter:description" content="Apoio, e inclusão social com cães guia, cães de apoio emocional, de terapia assistida e de companhia.">
    <meta name="description" content="Apoio, e inclusão social com cães guia, cães de apoio emocional, de terapia assistida e de companhia.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Escola HKeller">
    <link rel="apple-touch-icon" type="image/svg+xml" sizes="180x180" href="/assets/img/logos/logo180.svg">
    <link rel="icon" type="image/svg+xml" sizes="16x16" href="/assets/img/logos/logo16.svg">
    <link rel="icon" type="image/svg+xml" sizes="32x32" href="/assets/img/logos/logo32.svg">
    <link rel="icon" type="image/svg+xml" sizes="180x180" href="/assets/img/logos/logo180.svg">
    <link rel="icon" type="image/svg+xml" sizes="192x192" href="/assets/img/logos/logo192.svg">
    <link rel="icon" type="image/svg+xml" sizes="512x512" href="/assets/img/logos/logo512.svg">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body style="background: #1a392d;color: #94c21c;">
    <nav class="navbar navbar-dark navbar-expand-md py-3" style="background: #326d56;">
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/tutor/index.php" style="color: #94c21c;"><span class="bs-icon-md bs-icon-circle bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: #134330;color: rgb(255, 255, 255);"><img src="/assets/img/logos/logo32.svg"></span><span style="font-family: 'Bakbak One', serif;color: #94c21c;">HKeller - TUTOR</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5" style="color: #94c21c;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="color: #94c21c;"><a class="nav-link active" href="/tutor/index.php" style="color: #94c21c;">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tutor/tutor.php" style="color: #94c21c;">Perfil</a></li>
                    <li class="nav-item"><a class="nav-link" href="/tutor/caes.php" style="color: #94c21c;">Cão</a></li>
                </ul><a class="btn btn-secondary ms-md-2" role="button" href="/index.php" style="background: #94c21c;color: rgb(26,57,45);">Sair</a>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 50px 0px 0px 0px;">
        <div class="btn-toolbar">
            <div class="btn-group" role="group">
                <button class="btn btn-success text-center d-lg-flex justify-content-lg-center align-items-lg-center" type="button">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"  data-bs-toggle="modal" data-bs-target="#staticBackdrop"><!-- data-bs-target="#modalHistorico" -->
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="table-responsive text-center" style="background: #326d56;color: rgb(148,194,28);--bs-body-color: #94c21c;">
            <table class="table table-hover table-borderless">
                <thead>
                    <tr class="table-active">
                        <th>Id</th>
                        <th>Data de Registro</th>
                        <th>Última Atualização</th>
                        <th>Status</th>
                        <th>Nome</th>
                        <th>Nome do Tutor</th>
                        <th>Cor</th>
                        <th>Dt. Nasc</th>
                        <th>Sexo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        if ($rs && mysqli_num_rows($rs) > 0) {
                            while ($row = mysqli_fetch_array($rs)) {
                        ?>
                        <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['dt_reg']?></td>
                        <td><?php echo $row['dt_up']?></td>
                        <td><?php if($row['fg_status']==1){echo 'Ativo';}else{echo 'Inativo';}?></td>
                        <td><?php echo $row['nome']?></td>
                        <td><?php echo $row['nome_do_tutor']?></td>
                        <td><?php echo $row['cor']?></td>
                        <td><?php echo $row['dt_nasc']?></td>
                        <td><?php if($row['sexo']==1){echo 'Masculino';}else{echo 'Feminino';}?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-info " type="button">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="text-center text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"  data-bs-toggle="modal" data-bs-target="#modalHistorico">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M96 0C43 0 0 43 0 96V416c0 53 43 96 96 96H384h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V384c17.7 0 32-14.3 32-32V32c0-17.7-14.3-32-32-32H384 96zm0 384H352v64H96c-17.7 0-32-14.3-32-32s14.3-32 32-32zm32-240c0-8.8 7.2-16 16-16H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16zm16 48H336c8.8 0 16 7.2 16 16s-7.2 16-16 16H144c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </td>
                        </tr>
                        <?php
                        }
                        } else {?>
                            <tr>
                            <td><?php echo 'Nenhum dado'?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" >
          <div class="modal-header" style="background: #326d56;color: #94c21c;">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro de Histórico</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background: #326d56;color: #94c21c;">
              <form method="post" action="../php/cadastros/historico.php" id="formCadastro" >
                <div class="row">
                    <div class="col">
                        <label>
                            Titulo
                        </label>
                        <input type="hidden" id="cad-id" class="form-control" name="id" style="background: #1a392d;color: #94c21c;">
                        <input type="hidden" id="cad-id-cao" class="form-control" name="id-cao" style="background: #1a392d;color: #94c21c;">
                        <input type="hidden" id="cad-id-tutor" class="form-control" name="id-tutor" style="background: #1a392d;color: #94c21c;">
                        <input type="text" id="cad-titulo" class="form-control" placeholder="Titulo" name="titulo" style="background: #1a392d;color: #94c21c;" required>
                    </div>   
                </div>
                <div class="row">
                    <div class="col">
                        <label>
                            Texto
                        </label>
                        <textarea class="form-control" id="cad-texto" name="texto" style="background: #1a392d;color: #94c21c;" required></textarea>
                    </div> 
                </div>    
                <div class="row" style="padding-top: 8px">
                    <label>
                            Data Inicio
                    </label>
                    <div class="col-md">
                        <input type="date" id="cad-dtIni" class="form-control" style="background: #1a392d;color: #94c21c; height: 100%" name="dt_ini">
                    </div>
                    <label>
                            Data Fim
                    </label>
                    <div class="col">    
                        <input type="date" id="cad-dtFim" class="form-control" style="background: #1a392d;color: #94c21c; height: 100%" name="dt_fim">
                    </div>
                </div>
            </form>
          </div>
            <div class="modal-footer" style="background: #326d56;color: #94c21c;">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" name="submit" form="formCadastro" class="btn btn-success" style="background: #94c21c;color: rgb(26,57,45);">Salvar</button>
          </div>
        </div>
      </div>
    </div>
    <!--Modal historico -->
    
    <div class="modal fade" id="modalHistorico" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalHistoricoLabel" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" >
          <div class="modal-header" style="background: #326d56;color: #94c21c;">
            <h1 class="modal-title fs-5" id="modalHistoricoLabel">Histórico</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background: #326d56;color: #94c21c;">
           <?php
                if ($rsHist && mysqli_num_rows($rsHist) > 0) {
                    while ($rsHist = mysqli_fetch_array($rsHist)) {
            ?>
            <h5><?php echo $rsHist['titulo']?></h5>
            <p><?php echo $rsHist['descricao']?></p> 
            <p><span>Data inicio: </span><?php echo $rsHist['dt_ini']?> <span>Data fim: </span><?php echo $rsHist['dt_fim']?></p> 
            <br>
            <?php
                    }
                } else {?>
                    <p><?php echo 'Nenhum dado'?></p>      
            <?php
                }
            ?>  
          </div>            
        </div>
      </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var editButtons = document.querySelectorAll(".edit-button");

          var modal = new bootstrap.Modal(document.getElementById("staticBackdrop"));

          var idField = document.getElementById("cad-id");
          var tituloField = document.getElementById("cad-titulo");
          var textoField = document.getElementById("cad-texto");
          var dtIniField = document.getElementById("cad-dtIni");
          var dtFimField = document.getElementById("cad-dtFim");

          editButtons.forEach(function(button) {
            button.addEventListener("click", function() {
              var id = this.getAttribute("data-id");
              var titulo = this.getAttribute("data-titulo");
              var texto = this.getAttribute("data-texto");
              var dtIni = this.getAttribute("data-dt-ini");
              var dtFim = this.getAttribute("data-dt-fim");

              idField.value = id;
              tituloField.value = titulo;
              textoField.value = texto;
              dtIniField.value = dtIni;
              dtFimField.value = dtFim;

              modal.show();
            });
          });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.delete-btn').click(function() {
                var id = $(this).data('id');

                $.ajax({
                    url: '../php/delete/caes.php',
                    method: 'POST',
                    data: { id: id },
                    success: function(response) {
                        console.log(response);
                    }
                });
            });
        });
    </script>
</body>

</html>