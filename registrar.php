<?php 
	include ("con_db.php");

	if(isset($_POST['register'])){
		if(strlen($_POST['nombre'])>=1 && strlen($_POST[email])>=1 && strlen($_POST[password])>=1){
			$nombre=trim($_POST['nombre']);
			$email=trim($_POST['email']);
			$pass=password_hash($_POST[password], PASSWORD_DEFAULT,[10]);
			$feReg=date("d/m/y");
			$consulta="INSERT INTO registro(nombre,email,fe_reg) values('$nombre','$email','$pass','$feReg')";
			$resultado=mysqli_query($conexion,$consulta);
			if(resultado){
				?>
				<h3 class="ok">¡Te has inscrito correctamente!!</h3>
				<?php 
			}else{
				?>
				<h3 class="bad">¡Ha ocurrido un Error!</h3>
				<?php
			}else{
				?>
				<h3 class="bad">¡Por favor completa los campos!</h3>
				<?php 

			}
		}
	}

 ?>