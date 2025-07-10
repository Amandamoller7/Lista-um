<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio01.php</title>
</head>
<body>
    <form  method="POST" action="">
    <label for="numero_par"> Verificar se o numero é par:</label>
    <input type= "number" id= "numero_par" name = "numero_par" required>
    <button type="submit" name= "verificar_par"> Verificar </button>
    </form>

    <?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['verificar_par'])){
            $numero = $_POST['numero_par'];
                if ($numero % 2  == 0){
                echo "O número $numero é par";
            
                }else{ 
                    echo "O número $numero não é par";
                }
        }
       
    }

 ?>
</body>
</html>