<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html</title>
</head>
<body>
     <h1>Isso é html</h1> 

    <?php
        $dia = "terça";
        $temperatura = 26;

    if($temperatura > 25){
            $clima = "quente";
        }elseif($temperatura <= 25 && $temperatura >= 18){
            $clima = "chuvoso";
        }elseif($temperatura < 18){
            $clima = "nevando";
        }
    
    echo "o clima hoje está $clima, com temperatura média de $temperatura nessa $dia";

    echo "<br><hr>";
    //segunda parte

    $nomes = array("peter", "parker", "fulano", "fubango", "cicrano");

    echo "<br>";

    for($i=0; $i <= 4; $i++){
        echo "<br>";
        echo $nomes[$i];
    
    };
    echo "<br><hr>";
    $total = 0 ;
    foreach ($nomes as $nome) {
        echo "<br>";
        echo $nome;
        $total++ ;
    };
        
     ?>
    
</body>
</html>