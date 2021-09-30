<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $password = trim($_POST['password']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO register(nombre, email, password, fecha_reg) VALUES ('$name','$email','$password','$fechareg')";

	    $resultado = mysqli_query($conex, $consulta);
	    if ($resultado) {
	    	?> 
			<section>
	    			<h6 id="account_created">¡Te has inscripto correctamente!</h6>
			</section>
           <?php
	    } else {
	    	?> 
			<section>
	    			<h6 id="account_denied">¡Ups revise nuevamente el formulario!</h6>
			</section>
           <?php
	    }
    }   else {
	    	?> 
			<section>
					<h6 id="account_denied">¡Porfavor complete los campos faltantes!</h6>
			</section>
           <?php
    }
}

?>