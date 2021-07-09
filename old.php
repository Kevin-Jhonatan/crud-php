<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="vista.php" method="$_POST">
    <input type="text", name="nombre", id="">
    <input type="submit">
    </form>

    <?php
   /*  $servidor = "localhost";
            $nombreusuario = "kevin";
            $password = "drupal";
            $db = "test-php";
        
            $conexion = new mysqli($servidor, $nombreusuario, $password, $db);
        
            if($conexion->connect_error){
                die("Conexión fallida: " . $conexion->connect_error);
            }

			$sql = "INSERT INTO tabla(texto, completado)VALUES('$texto', 1)";
            if(isset($_POST['texto']))
			{
                $texto = $_POST['texto'];
                
                $sql = "INSERT INTO tabla(texto, completado)VALUES('$texto', false)";
                
                if($conexion->query($sql) === true)
				{
                    echo '<div><form action=""><input type="checkbox">'.$texto.'</form></div>';
                }
				else
				{
                    die("Error al insertar datos: " . $conexion->error);
                }
                $conexion->close();
            }
			 */

    ?>
    </div>
</body>
</html>