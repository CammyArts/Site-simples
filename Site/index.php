<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina do aluno</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            border: 0;
            box-sizing: border-box;
        }
        body{
            background-color: rgb(250, 199, 230);
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        .container1{
        background: #fcd4ff;
        justify-content: center;
        align-items: center;
        padding: 20px;
        margin: 40px;
    
        }

        .container2{
        background: #fcd4ff;
        justify-content: center;
        align-items: center;
        }
        .pessoais{
            padding: 5px;
            margin-top: 6px;
            border-radius: 5px;
            background-color: rgb(185, 109, 255);
        }
        .notas{
            padding: 5px;
            margin-top: 6px;
            border-radius: 5px;
            background-color: rgb(185, 109, 255);
        }

    </style>
</head>
<body>
    <div class="container2">
    <div class="container1">
        <h1>Pagina do aluno</h1>
        <form action="pessoais.php">
            <input class="pessoais" type="submit" value="Ver dados pessoais">
        </form>
        <form action="notas.php">
            <input class="notas" type="submit" name="" id="" value="Notas do curso">
        </form>
    </div>
    </div>
</body>
</html>
<?php
$nome = $_POST["tx_nome"];
$sobrenome = $_POST["tx_sobrenome"];
$telefone = $_POST["tx_telefone"];
$nickname = $_POST["tx_nickname"];
$email = $_POST["em_usuario"];
$senha = $_POST["pw_usuario"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Definir cookies com os dados do formulário
    setcookie("tx_nome", $_POST["tx_nome"], time() + (86400 * 30), "/"); // 86400 segundos = 1 dia
    setcookie("tx_sobrenome", $_POST["tx_sobrenome"], time() + (86400 * 30), "/");
    setcookie("tx_telefone", $_POST["tx_telefone"], time() + (86400 * 30), "/");
    setcookie("tx_nickname", $_POST["tx_nickname"], time() + (86400 * 30), "/");
    setcookie("em_usuario", $_POST["em_usuario"], time() + (86400 * 30), "/");
}

?>