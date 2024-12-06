<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filme = $_POST['filme'] ?? 'Não especificado';
    $hora = $_POST['hora'] ?? 'Não especificada';
    $data = $_POST['data'] ?? 'Não especificada';
    $poltronas = $_POST['poltronas'] ?? 'Nenhuma';
    $valor_total = count(explode(',', $poltronas)) * 20; // Cada poltrona custa R$20,00
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Reserva de Assentos" />
    <meta name="author" content="Cinemathic" />
    <title>Reservas - Cinemathic</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet"/>
    <link href="../css/styles.css" rel="stylesheet"/>
    <link href="../css/styles2.css" rel="stylesheet"/>
</head>

<body class="bg-dark text-white">
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">O melhor da Região</span>
            <span class="site-heading-lower">Cinemathic</span>
        </h1>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Cinemathic</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../index.html">Home</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../catalogo.html">Catálogo</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../reserva.php">Reserva</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../sobre.html">Sobre</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section">
        <div class="container">
            <header class="text-center mb-4">
                <h2 class="section-heading-upper text-uppercase">Detalhes das Reservas</h2>
            </header>

            <div class="table-responsive">
                <table class="table table-dark table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Cadeiras</th>
                            <th>Dia</th>
                            <th>Hora</th>
                            <th>Filme</th>
                            <th>Valor Total (R$)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= htmlspecialchars($poltronas); ?></td>
                            <td><?= htmlspecialchars($data); ?></td>
                            <td><?= htmlspecialchars($hora); ?></td>
                            <td><?= htmlspecialchars($filme); ?></td>
                            <td><?= 'R$ ' . number_format($valor_total, 2, ',', '.'); ?></td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Cinemathic 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
