<?php
	include("conexion_BD.php");

	if (isset($_POST['depositar'])) {
		if (strlen($_POST['number']) >= 10) {
			
			$donar = $_POST['number'];

			$consultar = "INSERT INTO valor_donaciones( valor_donacion) VALUES ('$donar')";

			$resultados = mysqli_query($conexion,$consultar);

			if ($resultados) {
				?>
					<span class="envio">dodacion recibida</span>
				<?php
			}else{
				?>
					<span class="error">donacion no recibida</span>
				<?php
			}
		}
	}

?>