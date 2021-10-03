!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>umsa</title>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/stylenotas.css">
</head>

<body>
	
	<?php include '../cabecera.inc.php'; ?>
	

	<section id="main-content">
	
		<article>
			<header>
				<h1>Notas del Estudiante</h1>
			</header>
			
			<div class="content">
				<?php
			include "../conexion.inc.php";
			$ci='222';
			$query = $connection->prepare("SELECT * FROM nota WHERE ci=:ci"); 
		    $query->bindParam("ci", $ci, PDO::PARAM_STR);
		   
		    $query->execute();

		    $result = $query->fetch(PDO::FETCH_ASSOC);
			?>

			<table border="1" style="width: 100%;">
				<thead>
				<tr>
					<th>CI</th>
					<th>SIGLA</th>
					<th>Nota 1</th>
					<th>Nota 2</th>
					<th>Nota 3</th>
					<th>PROMEDIO</th>

				</tr>
				</thead>
				<tbody>
				<?php
						echo "<tr>";
						echo "<td>".$result['ci']."</td>";
						echo "<td>".$result['sigla']."</td>";
						echo "<td>".$result['nota1']."</td>";
						echo "<td>".$result['nota2']."</td>";
						echo "<td>".$result['nota3']."</td>";
						echo "</tr>";
				?>
				</tbody>
			</table>
				
			</div>

	
			
		</article> 
	
	</section> 
	
<?php include '../pie.inc.php' ?>

	
</body>
</html>