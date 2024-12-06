<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Cinemathic</title>
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

        .form-container {
            background: rgba(255, 255, 255, 0.9); /* Fundo branco com opacidade para destacar o conteúdo */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
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

        button {
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

        button:hover {
            background-color: #0056b3;
        }

        .login-link {
            display: block;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }

        .login-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Cadastro</h1>
        <form action="cadastraUsuario.php" method="POST">
            <input type="text" name="nomeCompleto" class="form-input" placeholder="Nome Completo" required>
            <input type="email" name="email" class="form-input" placeholder="E-mail" required>
            <input type="text" name="cpf" class="form-input" placeholder="CPF" required>
            <input type="password" name="senha" class="form-input" placeholder="Senha" required>
            <button type="submit">Confirmar</button>
        </form>
        <a href="login.php" class="login-link">Já tem uma conta? Faça login aqui</a>
    </div>
</body>

</html>
