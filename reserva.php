<?php
include("php/permission.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cinemathic - Reserva de Assentos</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/styles2.css" rel="stylesheet" />
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.html">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="catalogo.html">Catálogo</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="reserva.php">Reserva</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="sobre.html">Sobre</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="php/login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section">
        <div class="container">
            <header class="text-center mb-4">
                <h2 class="section-heading-upper text-uppercase">Reserva de Assentos</h2>
            </header>

            <!-- Formulário para Seleção de Filme e Horário -->
            <div class="form-section mb-4">
                <form id="reservation-form" action="php/confirmacao.php" method="POST">
                    <div class="mb-3">
                        <label for="movie-select" class="form-label">Escolha o Filme</label>
                        <select class="form-select" id="movie-select" name="filme" required>
                            <option value="" disabled selected>Escolha um filme...</option>
                            <option value="Your Name">Your Name</option>
                            <option value="Interestelar">Interestelar</option>
                            <option value="O Show de Truman">O Show de Truman</option>
                            <option value="Cidade de Deus">Cidade de Deus</option>
                            <option value="Parasita">Parasita</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="time-select" class="form-label">Escolha o Horário</label>
                        <select class="form-select" id="time-select" name="hora" required>
                            <option value="" disabled selected>Escolha o horário...</option>
                            <option value="14:00">14:00</option>
                            <option value="18:00">18:00</option>
                            <option value="20:00">20:00</option>
                            <option value="22:00">22:00</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="day-select" class="form-label">Escolha o dia</label><br>
                        <input type="date" name="data" id="day-select">
                    </div>
                    <div class="mb-3">
                        <label for="poltronas" class="form-label">Selecione suas Poltronas</label>
                        <input type="hidden" id="selected-seats" name="poltronas" value="">
                    </div>

                    <div class="d-flex flex-column align-items-center">
                        <div class="screen text-white text-center py-2 mb-3 w-100" id="tela" style="max-width: 400px;">
                            TELA</div>
                        <div class="seat-container row gy-2 justify-content-center w-100" style="max-width: 600px;"
                            id="poltronas">
                            <div class="row">
                                <div class="row-2 text-center">
                                    <div id="A" class="d-flex flex-wrap justify-content-center">
                                        <div class="nomeColuna">A</div>
                                    </div>
                                </div>
                                <div class="row-2 text-center">
                                    <div id="B" class="d-flex flex-wrap justify-content-center">
                                        <div class="nomeColuna">B</div>
                                    </div>
                                </div>
                                <div class="row-2 text-center">
                                    <div id="C" class="d-flex flex-wrap justify-content-center">
                                        <div class="nomeColuna">C</div>
                                    </div>
                                </div>
                                <div class="row-2 text-center">
                                    <div id="D" class="d-flex flex-wrap justify-content-center">
                                        <div class="nomeColuna">D</div>
                                    </div>
                                </div>
                                <div class="row-2 text-center">
                                    <div id="E" class="d-flex flex-wrap justify-content-center">
                                        <div class="nomeColuna">E</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-4">
                        <button type="submit" class="btn btn-primary" id="submit-btn" disabled><Ri:a>Confirmar</Ri:a></button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer text-faded text-center py-5">
        <div class="container">
            <p class="m-0 small">Copyright &copy; Cinemathic 2024</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const rows = ['A', 'B', 'C', 'D', 'E'];
        const seatsPerRow = 10;
        const occupiedSeats = ['A1', 'B3', 'C7', 'D4'];

        // Preencher assentos
        rows.forEach(row => {
            const column = document.getElementById(row);

            for (let i = 1; i <= seatsPerRow; i++) {
                const seat = document.createElement('div');
                const seatId = `${row}${i}`;

                seat.classList.add('seat', 'bg-secondary', 'text-white', 'rounded', 'd-flex', 'justify-content-center', 'align-items-center', 'm-1');
                seat.style.width = '40px';
                seat.style.height = '40px';
                seat.textContent = i;
                seat.dataset.id = seatId;

                if (occupiedSeats.includes(seatId)) {
                    seat.classList.add('occupied', 'bg-danger');
                } else {
                    seat.addEventListener('click', () => {
                        if (!seat.classList.contains('occupied')) {
                            seat.classList.toggle('bg-success');
                            updateProceedButton();
                        }
                    });
                }

                column.appendChild(seat);
            }
        });

        // Atualiza o botão de prosseguir
        function updateProceedButton() {
            const selectedSeats = document.querySelectorAll('.seat.bg-success');
            const submitBtn = document.getElementById('submit-btn');
            submitBtn.disabled = selectedSeats.length === 0;

            // Armazena as poltronas selecionadas no campo hidden
            const selectedSeatsArray = Array.from(selectedSeats).map(seat => seat.dataset.id);
            document.getElementById('selected-seats').value = selectedSeatsArray.join(', ');
        }
    </script>
</body>

</html>
