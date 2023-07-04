<?php
require '../php/config.php';
$conn = openCon();
$query = "SELECT id, nome, email, senha, cpf, dt_nasc, telefone, fg_status, fg_permissao, dt_reg, dt_up FROM hkeller.usuario WHERE fg_status=1 and fg_permissao=2;";
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
    <div class="container" style="padding: 79.5px 250px 0px 250px;">
        
        <div class="table-responsive text-center" style="background: #326d56;color: rgb(148,194,28);--bs-body-color: #94c21c;">
            <table class="table table-hover table-borderless" style="margin-bottom: 0rem;">
                <tbody>
                        <?php
                        if ($rs && mysqli_num_rows($rs) > 0 ) {
                            while ($row = mysqli_fetch_array($rs)) {
                        ?>
                        <tr>
                            <td class="table-active">Data de Registro</td>
                            <td><?php echo $row['dt_reg']?></td>
                        </tr>
                        <tr>
                            <td class="table-active">Última Atualização</td>
                            <td><?php echo $row['dt_up']?></td>    
                        </tr>
                        <tr>
                            <td class="table-active">Status</td>
                            <td><?php if($row['fg_status']==1){echo 'Ativo';}else{echo 'Inativo';}?></td>
                        </tr>
                        <tr>
                            <td class="table-active">Nome</td>
                            <td><?php echo $row['nome']?></td>    
                        </tr>
                        <tr>
                            <td class="table-active">Email</td>
                            <td><?php echo $row['email']?></td>
                        </tr>
                        <tr>
                            <td class="table-active">CPF</td>
                            <td><?php echo $row['cpf']?></td>
                        </tr>
                        <tr>
                            <td class="table-active">Telefone</td>
                            <td><?php echo $row['telefone']?></td>
                        </tr>
                        <tr>
                            <td class="table-active">Teste</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-warning edit-button" type="button" data-id="<?php echo $row['id']; ?>" data-nome="<?php echo $row['nome']; ?>" data-email="<?php echo $row['email']; ?>" data-cpf="<?php echo $row['cpf']; ?>" data-telefone="<?php echo $row['telefone']; ?>" data-dt-nasc="<?php echo $row['dt_nasc']; ?>" data-senha="<?php echo $row['senha']; ?>" data-grupo="<?php echo $row['fg_permissao']; ?>">
                                        <span><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="text-center text-black-50 d-lg-flex justify-content-lg-center align-items-lg-center"><path d="M421.7 220.3L188.5 453.4L154.6 419.5L158.1 416H112C103.2 416 96 408.8 96 400V353.9L92.51 357.4C87.78 362.2 84.31 368 82.42 374.4L59.44 452.6L137.6 429.6C143.1 427.7 149.8 424.2 154.6 419.5L188.5 453.4C178.1 463.8 165.2 471.5 151.1 475.6L30.77 511C22.35 513.5 13.24 511.2 7.03 504.1C.8198 498.8-1.502 489.7 .976 481.2L36.37 360.9C40.53 346.8 48.16 333.9 58.57 323.5L291.7 90.34L421.7 220.3zM492.7 58.75C517.7 83.74 517.7 124.3 492.7 149.3L444.3 197.7L314.3 67.72L362.7 19.32C387.7-5.678 428.3-5.678 453.3 19.32L492.7 58.75z"></path></svg></span>
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
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Cadastro de Usuario</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background: #326d56;color: #94c21c;">
              <form method="post" action="../php/cadastros/tutores.php" id="formCadastro" >
                <div class="row">
                    <div class="col">
                        <label>
                            Nome
                        </label>
                        <input type="hidden" id="cad-id" class="form-control" name="id" style="background: #1a392d;color: #94c21c;">
                        <input type="text" id="cad-nome" class="form-control" placeholder="Nome" name="nome" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                    <div class="col">
                        <label>
                            E-mail
                        </label>
                        <input type="email" id="cad-email" class="form-control" placeholder="Email" name="email" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                </div>
                 <div class="row" style="padding-top: 8px">
                    <div class="col">
                        <label>
                            Senha
                        </label>
                        <input type="password" id="cad-senha" class="form-control" placeholder="Senha" name="senha" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                </div>
                <div class="row" style="padding-top: 8px">
                    <div class="col">
                        <label>
                            CPF
                        </label>
                        <input type="text" id="cad-cpf" class="form-control" placeholder="CPF" name="cpf" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                    <div class="col">
                        <label>
                            Telefone
                        </label>
                        <input type="text" id="cad-telefone" class="form-control" placeholder="Telefone" name="telefone" style="background: #1a392d;color: #94c21c;" required>
                    </div>
                </div>
                <div class="row" style="padding-top: 8px"> 
                    <label>
                        Data de nascimento
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
            var emailField = document.getElementById("cad-email");
            var senhaField = document.getElementById("cad-senha");
            var cpfField = document.getElementById("cad-cpf");
            var telefoneField = document.getElementById("cad-telefone");
            var dtNascField = document.getElementById("cad-dtNasc");
            

            editButtons.forEach(function(button) {
              button.addEventListener("click", function() {
                var id = this.getAttribute("data-id");
                var nome = this.getAttribute("data-nome");
                var email = this.getAttribute("data-email");
                var senha = this.getAttribute("data-senha");
                var cpf = this.getAttribute("data-cpf");
                var telefone = this.getAttribute("data-telefone");
                var dtNasc = this.getAttribute("data-dt-nasc");
                

                idField.value = id;
                nomeField.value = nome;
                emailField.value = email;
                senhaField.value = senha;
                cpfField.value = cpf;
                telefoneField.value = telefone;
                dtNascField.value = dtNasc;
                

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
                    url: '../php/delete/tutores.php',
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