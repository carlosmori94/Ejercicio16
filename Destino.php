
<?php
	if(isset($_POST['Nombre']))//Vemos si esta en null o tiene algo
	{
	 	echo $_POST['Nombre'];	//Entra si no tiene nada
	 	echo "  ";
	 	echo $_POST['Numerouno'];	//Entra si no tiene nada

	}
	else
	{
		echo "Primer ingreso";	
	}


?>