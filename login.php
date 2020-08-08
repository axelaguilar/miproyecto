<?php
//echo $_POST['correo'] . ' ' . $_POST['ps'];
if(isset($_POST['correo']) && isset($_POST['ps']))
	{
		// include Database connection file 
		include("bd.php");

		// get values 
		$correo=$_POST['correo'];
		$password=$_POST['ps'];

		$query = "SELECT usuario,nombre,password,estado from usuarios where usuario='$correo' and password ='$password'";
		echo $query;
		if (!$result = mysqli_query($con,$query)) {
	        exit(mysqli_error());
	    }
	    if(mysqli_num_rows($result) > 0)
	    {
	    	while($row = mysqli_fetch_assoc($result))
	    	{
	    		$nombre=$row['nombre'];
				$usuario=$row['usuario'];
				$estado=$row['estado'];
					
	    	}
	    	header("Location: taller1.php");

		}else{
			echo "no hay registros";
		}

	}	
?>