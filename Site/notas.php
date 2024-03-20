<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas</title>
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
        thead{
            padding: 30%;
            margin: 30%;
            background-color: blueviolet;
        }
        table{
            padding: 6%;
            margin: 5%;
            background-color: antiquewhite;
        }
    </style>
</head>
<body>
<table border="1">
        <thead>
            <tr>
                <th>Matéria</th>
                <th>Notas</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $materias = array("Matemática", "Português", "Inglês", "Química", "Física", "Geografia");

            foreach ($materias as $materia) {
                echo "<tr>";
                echo "<td>$materia</td>";
                echo "<td>";
                
                $notas = array();
                $soma_notas = 0;

                // Gerar 10 notas aleatórias
                for ($i = 0; $i < 10; $i++) {
                    $nota = rand(0, 10);
                    $notas[] = $nota;
                    $soma_notas += $nota;
                    echo "$nota ";
                }

                // Calcular a média aritmética
                $media = $soma_notas / count($notas);
                echo "</td>";
                echo "</tr>";

                // Mostrar as notas como array e a média
                echo "<tr>";
                echo "<td colspan='2'>";
              
                echo "Média: " . number_format($media, 2);
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>