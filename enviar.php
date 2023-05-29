<?php
include("conexion.php");
if (isset($_POST['contact']))
{  
    if(
        strlen ($_POST['name']) >= 1 &&
        strlen ($_POST['email']) >= 1 &&
        strlen ($_POST['message']) >= 1
         )
         {   
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $message = trim($_POST['message']);

            $consulta ="INSERT INTO Contacto (Nombre, Correo, Mensaje) 
            VALUES ('$name','$email','$message')";
            $resultado =mysqli_query($conex, $consulta);


            if($resultado){
                ?>
                <h3 class="success"> El formulario se envio correctamente</h3>
                <?php
            } else {
                ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else
        {
            ?>
            <h3 class="error">Llena todo los campos</h3>
            <?php 
            }
}

?>