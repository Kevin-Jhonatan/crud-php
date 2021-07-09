<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="vista.php">
    <input type="text" name="tx1" id="tx1">
    <input type="submit" value ="Insertar">
    </form>

    <form action="vista.php">
    <input type="texto" name="tx2" id="">
    <input type="submit" value="Mostrar" name=""><br/>
    </form>

    <form action="vista.php">
    <input type="text" name="tx3" id="tx3">
    <input type="submit" value="Modificar">
    </form>

    <form action="vista.php">
    <input type="text" name="tx4" id="tx4">
    <input type="submit" value="Eliminar">
    </form> -->
    <div>
        <?php
            //$tx2 = $_POST['name'];
            // conectando Base de datos
           /*  function conectar()
            { */
                $host = 'localhost';
                $user = 'kevin';
                $pwd = 'drupal';
                $bd = 'prueba';
                
                try
                {
                    $conexion = new PDO("mysql:host=$host; bdname=$bd",$user, $pwd);
                    echo "Conexion exitosa";
                }
                catch(Exception $e)
                {
                    die('ERROR: '.$e->getMessage());
                    echo "No hay conexion a la base de datos";
                }
            //}     
        ?>
    </div>
</body>
</html>