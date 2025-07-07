<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">

</head>

<body div="body-error">
    <div class="container">
    <img src="https://www.saoluis.ma.gov.br/img/logo_mobile.png?1738946184"><br>
    <div class="login-box">
        <h2>Login</h2>
        <form action="verifica_login.php" method="POST">
            <label>CPF:</label>
            <input type="text" name="cpf" required>

            <label>Data de Nascimento: </label>
            <input type="date" name="data_nascimento" required>

            <label>Secretaria/Órgão: </label>
            <select name="orgao" id="orgao" required>
                <option value="semurh">Semurh</option>
                <option value="semit">Semit</option>
            </select><br />

            <button type="submit">Entrar</button>
        </form>
    </div>
    </div>

</body>

</html>