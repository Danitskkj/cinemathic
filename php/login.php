<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cinema de Espumoso com os últimos lançamentos e reserva de ingressos online.">
    <meta name="author" content="Cinemathic">
    <title>Login - Cinemathic</title>
    <style>
        /* Reset básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            background-image: url("../assets/img/bg.jpg");
            background-size: cover;
            background-position: center;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.9); /* Fundo branco com opacidade para destacar o conteúdo */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .register-link {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .register-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <h2>Bem-vindo ao Cinemathic</h2>
        <form action="autentica.php" method="post">
            <input type="text" name="email" class="form-input" placeholder="Digite seu e-mail" required>
            <input type="password" name="senha" class="form-input" placeholder="Digite sua senha" required>
            <button type="submit" name="entrar" class="btn">Entrar</button>
        </form>
        <a href="form.php" class="register-link">Ainda não tem cadastro? Cadastre-se aqui</a>
    </div>
</body>

</html>
