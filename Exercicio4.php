<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio4</title>
</head>
<body>
   <form  method="POST" action="">
    <label for="numero"> Fatorial de :</label>
    <input type= "number" id= "numero_inicial" name = "numero_inicial" required>
    <button type="submit" name= "numero_fatorial"> fatorar</button>
    </form>

    <?php

    function resposta ($numero){
         $resposta= 1;  //Acumulativa para acumular os resultados;
          for ($i = 1; $i>=$numero ;$i--){
                                $resposta *=$i;
                                 echo "<h3> $numero = $resposta </h3> <br>";
         };

    return($resposta);
    };



    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['numero_fatorial'])){
            $numero = $_POST['numero_inicial'];

            $resultado = resposta($numero);
                echo "<h3> O fatorial do $numero é..</h3>";
                echo   "$resultado";
        
        }
    }
 ?>   
</body>
</html>