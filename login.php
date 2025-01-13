<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Vulnerabilidade: injeção de SQL
    $conn = new mysqli('localhost', 'root', '', 'vulnerable_db');
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Bem-vindo, " . $username;
    } else {
        echo "Login falhou!";
    }
}
?>
<form method="POST">
    Usuário: <input type="text" name="username"><br>
    Senha: <input type="password" name="password"><br>
    <input type="submit" value="Entrar">
</form>