<?php
require 'php/config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $conn = openCon();
            $query = "SELECT id, email, senha, fg_permissao FROM usuario WHERE email LIKE '$email' AND senha LIKE '$senha' limit 1;";
            $rs = $conn->query($query);
            if ($rs && mysqli_num_rows($rs) > 0) {
                while ($row = $rs->fetch_assoc()) {
                    $fg_perm = $row['fg_permissao'];
                    if ($fg_perm == 1) {
                        $_SESSION['user_id'] = $row['id'];
                        header("Location: ../adm/index.php");
                        die();
                    } else if ($fg_perm == 2) {
                        $_SESSION['user_id'] = $row['id'];
                        header("Location: ../tutor/index.php");
                        die();
                    }
                }
            } else {
                $_SESSION['msgErroLogin'] = "Email ou senha inválidos";
                header("Location: login.php");
                die();
            }
        }
    } catch (Exception $e) {
        echo "Ocorreu um erro: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Escola HKeller - Entrar</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">
</head>

<body style="background: #1a392d;color: #94c21c;">
    <section class="py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col d-lg-flex d-xl-flex justify-content-lg-center justify-content-xl-center align-items-xl-center"><img src="/assets/img/logos/logoText.png" width="496"></div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div id="loginAlert"></div>
                    <div class="card mb-5" style="background: #326d56;">
                        <div class="card-body d-flex flex-column align-items-center" style="background: #326d56;">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4" style="background: #134330;"><i class="fa fa-user" style="color: rgb(50,109,86);"></i></div>
                            <form class="text-center" method="post" action="">
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="background: #1a392d;color: var(--bs-green);" required=""></div>
                                <div class="mb-3"><input class="form-control" type="password" name="senha" placeholder="Senha" style="background: #1a392d;color: var(--bs-green);" required></div>
                                <div class="mb-3"><button class="btn btn-secondary d-block w-100" type="submit" name="submit" style="background: #94c21c;color: rgb(26,57,45);">Login</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const loginAlert = document.getElementById('loginAlert');
        const appendAlert = (message, type) => {
          const wrapper = document.createElement('div');
          wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
          ].join('');
          loginAlert.append(wrapper);
        };
        <?php if (!empty($_SESSION['msgErroLogin'])): ?>
            appendAlert('<?php echo $_SESSION['msgErroLogin']; ?>', 'danger');
        <?php endif; ?>
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>