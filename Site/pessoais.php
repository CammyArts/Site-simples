<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados pessoais</title>
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
        div{
            padding: 15%;
            background-color: #fcd4ff;
        
        }
    </style>
</head>
<body>
    <div>
        <h1>Dados Pessoais</h1>
        
       <?php
       // Verificar se os dados foram enviados via POST
     
           // Exibir os dados pessoais
           // Verificar se os cookies existem e se contêm dados
        if (isset($_COOKIE['tx_nome']) && isset($_COOKIE['tx_sobrenome']) && isset($_COOKIE['tx_telefone'])) {
            // Exibir os dados pessoais
            echo "<p>Nome: " . $_COOKIE['tx_nome'] . "</p>";
            echo "<p>Sobrenome: " . $_COOKIE['tx_sobrenome'] . "</p>";
            echo "<p>Telefone: " . $_COOKIE['tx_telefone'] . "</p>";
            echo "<p>Nickname: " . $_COOKIE['tx_nickname'] . "</p>";
            echo "<p>Email: " . $_COOKIE['em_usuario'] . "</p>";
            // Se necessário, adicione o código para exibir mais dados aqui
        } else {
            echo "<p>Nenhum dado encontrado nos cookies.</p>";
        }
       ?>
        
    </div>
</body>
</html>