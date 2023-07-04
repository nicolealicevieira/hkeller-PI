<?php
if (isset($_SESSION['msgErroLogin'])) {
    $msgErroLogin = $_SESSION['msgErroLogin'];
    unset($_SESSION['msgErroLogin']);
}
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
    <div class="container" style="padding: 50px;">
        <div class="row">
            <div class="col-md-6"><a href="/tutor/caes.php" style="color: rgb(146,198,29);">
                    <div class="card" style="background: #1a392d;"><span class="text-center d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 100px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" style="height: 100px;width: 100px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M288 208C288 216.8 280.8 224 272 224C263.2 224 255.1 216.8 255.1 208C255.1 199.2 263.2 192 272 192C280.8 192 288 199.2 288 208zM256.3-.0068C261.9-.0507 267.3 1.386 272.1 4.066L476.5 90.53C487.7 95.27 495.2 105.1 495.9 118.1C501.6 213.6 466.7 421.9 272.5 507.7C267.6 510.5 261.1 512.1 256.3 512C250.5 512.1 244.9 510.5 239.1 507.7C45.8 421.9 10.95 213.6 16.57 118.1C17.28 105.1 24.83 95.27 36.04 90.53L240.4 4.066C245.2 1.386 250.7-.0507 256.3-.0068H256.3zM160.9 286.2L143.1 320L272 384V320H320C364.2 320 400 284.2 400 240V208C400 199.2 392.8 192 384 192H320L312.8 177.7C307.4 166.8 296.3 160 284.2 160H239.1V224C239.1 259.3 211.3 288 175.1 288C170.8 288 165.7 287.4 160.9 286.2H160.9zM143.1 176V224C143.1 241.7 158.3 256 175.1 256C193.7 256 207.1 241.7 207.1 224V160H159.1C151.2 160 143.1 167.2 143.1 176z"></path>
                            </svg></span>
                        <div class="card-body p-4" style="background: #326d56;border-style: none;">
                            <h4 class="card-title">Visualizar Cão</h4>
                            <p class="card-text">Visualizar cadastro do cão e adicionar histórico</p>
                        </div>
                    </div>
                </a></div>
            <div class="col-md-6"><a href="/tutor/tutor.php" style="color: rgb(146,198,29);">
                    <div class="card" style="background: #1a392d;"><span class="text-center d-lg-flex justify-content-lg-center align-items-lg-center" style="height: 100px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -64 640 640" width="1em" height="1em" fill="currentColor" style="height: 100px;width: 100px;">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M144 48C144 21.49 165.5 0 192 0C218.5 0 240 21.49 240 48C240 74.51 218.5 96 192 96C165.5 96 144 74.51 144 48zM152 512C134.3 512 120 497.7 120 480V256.9L91.43 304.5C82.33 319.6 62.67 324.5 47.52 315.4C32.37 306.3 27.47 286.7 36.58 271.5L94.85 174.6C112.2 145.7 143.4 128 177.1 128H320V48C320 21.49 341.5 .0003 368 .0003H592C618.5 .0003 640 21.49 640 48V272C640 298.5 618.5 320 592 320H368C341.5 320 320 298.5 320 272V224H384V256H576V64H384V128H400C417.7 128 432 142.3 432 160C432 177.7 417.7 192 400 192H264V480C264 497.7 249.7 512 232 512C214.3 512 200 497.7 200 480V352H184V480C184 497.7 169.7 512 152 512L152 512z"></path>
                            </svg></span>
                        <div class="card-body p-4" style="background: #326d56;border-style: none;">
                            <h4 class="card-title">Perfil</h4>
                            <p class="card-text">Visualizar e atualizar perfil</p>
                        </div>
                    </div>
                </a></div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>