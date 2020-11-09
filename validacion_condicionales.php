<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php
 if(isset($_POST["enviando"])){

	$contra = $_POST["contra_usuario"];
	$nombre = $_POST["nombre_usuario"];

	switch (true){
		case $nombre == "Juan" && $contra == "1234":
			echo "Adelante Juan, puedes pasar";
		break;

		case $nombre == "Pedro" && $contra == "54321":
			echo "Adelante Pedro, puedes pasar";
		break;

		case $nombre == "Quim" && $contra == "Visualquimet":
			echo "Ooooh! Maestro, porfavor pase!!";
		break;

		default:
			echo "No puedes pasar!";

	}
	
}

	

	
?>