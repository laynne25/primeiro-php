<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <?php
        echo "<h1 style= 'color: purple'> calculo da média </h1>";

        $aluno = $_GET['nomeAluno'];
        $nota1 = $_GET['n1'];
        $nota2 = $_GET['n2'];
        $nota3 = $_GET['n3'];

        echo "<h1>Média de $aluno do 3a SESI Moreno</h1>";

        $media = ($nota1 + $nota2 + $nota3)/3;
        $mediatotal = round($media);
                echo "a média é $mediatotal";

        if ($mediatotal >= 8){
            echo "<br> <h4 style = 'color: green'> aprovado</h4>";
        }else{
            echo "<br> <h3 style = 'color: red'> reprovado</h3>";
        }
    ?>
    <button onclick="window.location.href='media2.html'">voltar</button>

    <style>
        body{
            background-color: rgb(214, 86, 161);
            color: black;
        }
    </style>
</body>
</html>