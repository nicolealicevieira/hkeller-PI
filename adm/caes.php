<?php
require '../php/config.php';
$conn = openCon();
$query = "SELECT id, nome, cor, dt_nasc, sexo, fg_status, dt_reg, dt_up FROM hkeller.caes WHERE fg_status=1;";
$rs = $conn->query($query);
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
        <div class="container"><a class="navbar-brand d-flex align-items-center" href="/adm/index.php" style="color: #94c21c;"><span class="bs-icon-md bs-icon-circle bs-icon-primary d-flex justify-content-center align-items-center me-2 bs-icon" style="background: #134330;color: rgb(255, 255, 255);"><img src="/assets/img/logos/logo32.svg"></span><span style="font-family: 'Bakbak One', serif;color: #94c21c;">HKeller - GERENCIAMENTO</span></a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5" style="color: #94c21c;"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-5">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="color: #94c21c;"><a class="nav-link active" href="/adm/index.php" style="color: #94c21c;">Gerenciamento</a></li>
                    <li class="nav-item"><a class="nav-link" href="/adm/tutores.php" style="color: #94c21c;">Usuários</a></li>
                    <li class="nav-item"><a class="nav-link" href="/adm/caes.php" style="color: #94c21c;">Cães</a></li>
                </ul><a class="btn btn-secondary ms-md-2" role="button" href="/index.php" style="background: #94c21c;color: rgb(26,57,45);">Sair</a>
            </div>
        </div>
    </nav>
    <div class="container" style="padding: 50px 0px 0px 0px;">
        <div class="btn-toolbar">
            <div class="btn-group" role="group"><button class="btn btn-success text-center d-lg-flex justify-content-lg-center align-items-lg-center" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path>
                        </svg></span></button><button class="btn btn-secondary text-center d-lg-flex justify-content-lg-center align-items-lg-center" type="button"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path d="M464 16c-17.67 0-32 14.31-32 32v74.09C392.1 66.52 327.4 32 256 32C161.5 32 78.59 92.34 49.58 182.2c-5.438 16.81 3.797 34.88 20.61 40.28c16.89 5.5 34.88-3.812 40.3-20.59C130.9 138.5 189.4 96 256 96c50.5 0 96.26 24.55 124.4 64H336c-17.67 0-32 14.31-32 32s14.33 32 32 32h128c17.67 0 32-14.31 32-32V48C496 30.31 481.7 16 464 16zM441.8 289.6c-16.92-5.438-34.88 3.812-40.3 20.59C381.1 373.5 322.6 416 256 416c-50.5 0-96.25-24.55-124.4-64H176c17.67 0 32-14.31 32-32s-14.33-32-32-32h-128c-17.67 0-32 14.31-32 32v144c0 17.69 14.33 32 32 32s32-14.31 32-32v-74.09C119.9 445.5 184.6 480 255.1 480c94.45 0 177.4-60.34 206.4-150.2C467.9 313 458.6 294.1 441.8 289.6z"></path>
                        </svg></span></button></div>
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
                        <td><?php echo $row['cor']?></td>
                        <td><?php echo $row['dt_nasc']?></td>
                        <td><?php if($row['sexo']==1){echo 'Masculino';}else{echo 'Feminino';}?></td>
                        <td>
                            <div class="btn-group" role="group">
                                <button class="btn btn-warning edit-button" type="button" data-id="<?php echo $row['id']; ?>" data-nome="<?php echo $row['nome']; ?>" data-cor="<?php echo $row['cor']; ?>" data-dt-nasc="<?php echo $row['dt_nasc']; ?>" data-sexo="<?php echo $row['sexo']; ?>">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-center text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"><path d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"></path></svg></span>
                                </button>
                                <button class="btn btn-danger delete-btn" type="button" data-id="<?php echo $row['id']; ?>">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewbox="-32 0 512 512" width="1em" height="1em" fill="currentColor" class="text-center text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"><path d="M135.2 17.69C140.6 6.848 151.7 0 163.8 0H284.2C296.3 0 307.4 6.848 312.8 17.69L320 32H416C433.7 32 448 46.33 448 64C448 81.67 433.7 96 416 96H32C14.33 96 0 81.67 0 64C0 46.33 14.33 32 32 32H128L135.2 17.69zM394.8 466.1C393.2 492.3 372.3 512 346.9 512H101.1C75.75 512 54.77 492.3 53.19 466.1L31.1 128H416L394.8 466.1z"></path></svg></span>
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
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro de cão</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background: #326d56;color: #94c21c;">
              <form method="post" action="../php/cadastros/caes.php" id="formCadastro" >
                <div class="row">
                    <div class="col">
                        <label>
                            Nome cão
                        </label>
                        <input type="hidden" id="cad-id" class="form-control" name="id" style="background: #1a392d;color: #94c21c;">
                        <input type="text" id="cad-nome" class="form-control" placeholder="Nome" name="nome" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                    <div class="col">
                        <label>
                            Cor cão
                        </label>
                        <input type="text" id="cad-cor" class="form-control" placeholder="Cor" name="cor" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                </div>
                <div class="row" style="padding-top: 8px">
                    <div class="col-md">
                        <div class="form-floating" style="background: #1a392d;color: #94c21c;">
                          <select class="form-select" id="cad-sexo" style="background: #1a392d;color: #94c21c;" name="sexo" required>
                            <option selected>Selecione uma opção</option>
                            <option value="0">Feminino</option>
                            <option value="1">Masculino</option>
                          </select>
                          <label for="floatingSelectGrid">Sexo</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating" style="background: #1a392d;color: #94c21c;">
                          <select class="form-select" id="cad-sexo" style="background: #1a392d;color: #94c21c;" name="tutor" required>
                            <option selected>Selecione uma opção</option>
                            <?php
                                $conn2 = openCon();
                                $query2 = "SELECT id, nome FROM hkeller.usuario WHERE fg_status=1 and fg_permissao=2;";
                                $rs2 = $conn2->query($query2);
                                if ($rs2 && mysqli_num_rows($rs2) > 0) {
                                while ($row2 = mysqli_fetch_array($rs2)) {
                            ?>
                            <option value="<?php echo $row2['id']?>"><?php echo $row2['nome']?></option>
                            <?php
                                }}?>
                          </select>
                          <label for="floatingSelectGrid">Tutor</label>
                        </div>
                    </div>
                    <label>
                            Data nascimento
                    </label>
                    <div class="col">                        
                        <input type="date" id="cad-dtNasc" class="form-control" style="background: #1a392d;color: #94c21c; height: 100%" name="dt_nasc">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
          var editButtons = document.querySelectorAll(".edit-button");

          var modal = new bootstrap.Modal(document.getElementById("staticBackdrop"));

          var idField = document.getElementById("cad-id");
          var nomeField = document.getElementById("cad-nome");
          var corField = document.getElementById("cad-cor");
          var dtNascField = document.getElementById("cad-dtNasc");
          var sexoField = document.getElementById("cad-sexo");

          editButtons.forEach(function(button) {
            button.addEventListener("click", function() {
              var id = this.getAttribute("data-id");
              var nome = this.getAttribute("data-nome");
              var cor = this.getAttribute("data-cor");
              var dtNasc = this.getAttribute("data-dt-nasc");
              var sexo = this.getAttribute("data-sexo");

              idField.value = id;
              nomeField.value = nome;
              corField.value = cor;
              dtNascField.value = dtNasc;
              sexoField.value = sexo;

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