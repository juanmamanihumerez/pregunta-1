<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>umsa</title>

        <link rel="stylesheet" href="css/style.css">
</head>

<body>
	
	<?php include 'cabecera.inc.php'; ?>
	

	<section id="main-content">
	
		<article>
			<header>
				<h1>Facultad de Ciencias Puras y Naturales</h1>
			</header>
			
			<div class="content">
				<img class="imagen" src="imagenes/logofcpn.png" alt="" />
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<?php
	include "conexion.inc.php";
	$sql="select * from persona";
	$resultado=mysqli_query($conn, $sql);
	//print_r($resultado);
	?>
	<table border="1">
		<thead>
		<tr>
			<th>Carnet</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Operaciones</th>
		</tr>
		</thead>
		<tbody>
		<?php
			//$fila=mysqli_fetch_array($resultado)
			while($fila=mysqli_fetch_array($resultado)) {
				//print_r($fila);
				//echo $fila["nombre"]."<br/>";
				echo "<tr>";
				echo "<td>".$fila["ci"]."</td>";
				echo "<td>$fila[nombre]</td>";
				echo "<td>".$fila['paterno']."</td>";
				echo "<td>";
				echo "<a href='editar.php?tipo=editar&ci=$fila[ci]'>Editar</a>";
				echo " - ";
				echo "<a href='eliminar.php?ci=$fila[ci]'>Eliminar</a>";
				echo "</td>";
				echo "</tr>";
			}
		?>
			
		</article> 
	
	</section> 
	
<?php include 'pie.inc.php' ?>

	
</body>
</html>