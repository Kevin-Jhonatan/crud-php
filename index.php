<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar datos</title>
</head>
<body>
    <form action="index.php" method="POST">

        <input type="texto" name="nombre" id="boton1">
        <input type="submit" value="Crear"><br/>

       <!--  <input type="texto" value="paterno"> -->

       

		<address style="color:blue"
    </form>
    <form action="index.php"> 
    <input type="texto" name="boton2" id="consultar">
    <input type="submit" value="Consultar" name="boton2"> // este boton2 es su accion
    </form>

    <div id="todolist">
        <?php
			 // Conectar la base de datos
			$res =	mysqli_connect("localhost", "kevin", "drupal", "test-php");

			if($res === false){
				die("ERROR: Could not connect. " . mysqli_connect_error());
			}
			//echo "hola.....";
			$nombre = $_POST['nombre'];
            /* $paterno = $_POST['paterno']; */
			//echo $nombre;
			$sql = "INSERT INTO registro (nombre, paterno, materno, email) VALUES ('$nombre','$nombre','$nombre','$nombre')";
			//echo  $sql;
			mysqli_query($res, $sql);

		/* 	$sql = "SELECT * FROM registro";
			mysqli_query($res, $sql); */

           $consulta = $_POST['boton2'];
            /*echo $consulta;
            $sql = "inser into registro (nombre, paterno, materno, email) values ('$nombre', '$nombre', '$nombre', '$nombre')";
            mysqli_query($res, $sql); */
            // mostrar tabla
            if(isset($_POST['boton2']))
            {
                /* $nombre = $_POST['nombre'];
                $paterno = $_POST['paterno'];
                $materno = $_POST['materno'];
                $email = $_POST['email'] */;
                $sql = "SELECT nombre FROM registro";
                $mostrar = mysqli_query($res, $sql);
                //$sentencia->setFetchMode(PDO::FETCH_ASSOC);
                /* $consulta=mysqli_fetch_array($mostrar);
                echo $consulta; */
                //$consulta->execute();
                //echo $mostrar;
            }
            
        ?>
    </div>
   <table border="10">
   <thead>
   <tr>
     <td>nombre</td>
   </tr>
   </thead>
   <tbody>
    
     <?php
     /* foreach($consulta as $a)
     { */
     while($consulta = mysqli_fetch_array($mostrar)){
        
        echo "<tr><td>".$consulta['nombre']."</td></tr>";
     }
        ?>
   </tbody>
   </table>


</body>
</html>