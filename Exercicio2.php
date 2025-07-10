<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio02.php</title>
</head>
<body>
     <form  method="POST" action="">
    <label for="tabuada"> Calcule a tabuada:</label>
    <input type= "number" id= "numero_inicial" name = "numero_inicial" required>
    <button type="submit" name= "calcular_tabuada"> Calcular </button>
    </form>

    <?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['calcular_tabuada'])){
            $numero = $_POST['numero_inicial'];
              echo "<h3> Tabuada do $numero</h3>";
                     for ( $i =1; $i <=10; $i++) {
                         $resposta = $i * $numero;
                         echo " $i * $numero = $resposta<br>";
                    } 
        
        }
    }
 ?>
    
</body>
</html>