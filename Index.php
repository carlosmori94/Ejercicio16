<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<link rel="stylesheet" type="text/css" href="animacion.css">

</head>
<body>
	<div class= "CajaInicio animated bounceIn" >
<form action="Destino.php" method="post" id="FormIngreso">
	
	<label>Nombre</label>
	<input type ="Text" name="Nombre" placeholder="Ingrese aqui su nombre">
	<input type ="Text" name="Numerouno">
	<input type = "submit" class="MiBotonUTNMenuInicio">

</form>
</div>
</body>
</html>
<?php
	if(isset($_POST['Nombre']))//Vemos si esta en null o tiene algo
	{
	 	echo $_POST['Nombre'];	//Entra si no tiene nada
	}
	else
	{
		echo "Primer ingreso";	
	}


?>
