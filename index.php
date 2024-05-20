
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula php</title>
</head>
<body>
    <h1> Html </h1>
    
    <?php 

      echo "<h1 style = 'color: pink'> Olá Mundo!</h1>";
       
      $dia = "Terça";
        $temperatura = 25;

        if($temperatura > 25){
            $clima = "ensolarado";
        }elseif($temperatura <= 25 && $temperatura > 18){
            $clima = "chuvoso";
        }elseif($temperatura < 18){
            $clima = "nevando";
        }

        echo "Essa $dia começou $clima, com temperatura de $temperatura";

        //segunda parte

        
  
  
  ?>



</body>
</html>