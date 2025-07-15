<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6</title>
</head>
<body>
    <form method="POST" action="">
    <label for="numero">O primogenito:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit" name="calcular_divisor">Calcular divisor</button>
</form>
<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
         if ( isset($_POST['calcular_divisor'])){
             $numero = $_POST['numero'];
             echo "<h3> Os divisores de $numero são..</h3>";
            
                for ($i = 1; $i <= $numero; $i++){
                  if ($numero % $i == 0);
                  echo "$i é um divisor de $numero" ;
    
                 }
        
         }
    }

?>





</body>
</html>