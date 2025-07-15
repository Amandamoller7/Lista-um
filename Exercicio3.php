<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício3</title>
</head>
<body>
 <form  method="POST" action="">
    <label for="numero"> Positivo ou Negativo :</label>
    <input type= "number" id= "numero_inicial" name = "numero_inicial" required>
    <button type="submit" name= "descubra_numero"> v=dercobrir</button>
    </form>

    <?php
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['descubra_numero'])){
            $numero = $_POST['numero_inicial'];
                        if($numero > 0){
                        echo "<h3>$numero é positivo. </h3>";

                            }elseif($numero <0){
                                 echo " <h3>$numero é negativo. </h3>";

                                }else{
                                echo " <h3>$numero é zero!!. </h3>";
                                  }
                     
                    } 
        
        }
    
 ?>


    
</body>
</html>