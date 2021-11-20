<?php 
    include("con_db.php");
    $conex = conexion();

    $sql = "SELECT *  FROM usuario";
    $query = mysqli_query($conex, $sql);

    $row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title> USUARIO </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container mt-5">
    <div class="row"> 
                        
    <div class="col-md-3">
    <form action="insertar.php" method="POST">

<B style="font-size: 30px; color: #E6AF8E;"> Regístrate en MI TELMEX </B> <BR>
<B style="font-size: 26px; color: gainsboro;"> y disfruta de muchos beneficios. </B> <BR>

<IMG src="usuario.png" class="img"> <BR> <BR>

    <input type="text" class="cajas" name="Nombre" placeholder="Nombre" required=""> <BR>
    <input type="text" class="cajas" name="Apellido" placeholder="Apellido" required=""> <BR>
	<input type="text" class="cajas" name="Telefono" placeholder="Tel&eacute;fono" required=""> <BR>
	<input type="text" class="cajas" name="Direccion" placeholder="Direcci&oacute;n" required=""> <BR>
	<input type="date" class="cajas" name="FechaDeNacimiento" placeholder="Fecha de Nacimiento" required=""> <BR> <BR>
    
    <input class="btnN" style="
	font-family: Gill Sans MT Condensed;
	font-size: 27px;
	color: seashell;
	background-color: lightsalmon;
	border: outset;
	border-color: darksalmon;" type="submit" value="Crear cuenta">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th> No. de usuario </th>
                                        <th> Nombre </th>
                                        <th> Apellido </th>
                                        <th> Tel&eacute;fono </th>
                                        <th> Direcci&oacute;n </th>
                                        <th> Fecha de nacimiento </th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row = mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['NoUsuario']?></th>
                                                <th><?php  echo $row['Nombre']?></th>
                                                <th><?php  echo $row['Apellido']?></th>
                                                <th><?php  echo $row['Telefono']?></th>    
                                                <th><?php  echo $row['Direccion']?></th>    
                                                <th><?php  echo $row['FechaDeNacimiento']?></th>    

                                                <th><a href="actualizar.php?id=<?php echo $row['NoUsuario'] ?>" class="btn btn-info"> Editar </a></th>
                                                <th><a href="delete.php?id=<?php echo $row['NoUsuario'] ?>" class="btn btn-danger"> Eliminar </a></th>                                        
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div> 
    <center>
    <P style="color: gainsboro; font-family: Gill Sans MT Condensed; font-size: 30px"> ESTRADA GALLEGOS EVELYN MARISOL | 5J | CBTIS 128. </P>
    </center>
                    </div>  
            </div>
    </body>
    
</html>