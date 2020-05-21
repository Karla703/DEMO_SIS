<?php
 $resultado1 = "";
 $resultado2 = "";

    if (isset($_POST["txtbase"])) {

        $proceso = ($_POST["txtbase"]);
        $proceso2= ($_POST["txtaltura"]);
        $resultado1 = ($proceso * 2)+ ($proceso2 * 2);

        $resultado2 = ($_POST["txtbase"]) * ($_POST["txtaltura"]);

       
      
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<p> no entiendo lo que estoy haciendo </p>
    <h2>Mostrar en pantalla el área y perimetro de un rectángulo</h2>
    <hr>

    <form action="ejercicio3.php" method="post">
    <label for="txtbase"> Digite la base: </label>
        <input type="text" name="txtbase" id="txtbase" required>
        <hr>
        <label for="txtaltura"> Digite la altura: </label>
        <input type="text" name="txtaltura" id="txtaltura" required>
        <hr>
        <input type="submit" value="Calcular">
    </form>

    <?php
    echo "El perimetro es : $resultado1 <hr>"; 
    echo "El área es : $resultado2 cm <sup>2</sup>";
    ?>
    
</body>
</html>