<script src="js/jquery.js"></script>
<?php
$usuario =$_POST['user'];
$password=$_POST['pasword'];
$db_txt = 'registro.txt';
$respuesta="";
if(is_file($db_txt))
{
   $lineas = file($db_txt);
   foreach($lineas as $linea)
   {
      list($user,$pass) = explode(":",trim($linea),2);
      if(is_string($user)  &&  is_string($pass))
      {
         if($user == $usuario && $pass == $password){
            header("location:alternativo.php");
         }else if($user == $usuario && $pass!= $password){
            $respuesta= "Contraseña incorrecta";
            header("location:alternativo.php");
         }else if($user != $usuario && $pass== $password){
            $respuesta= "usuario incorrecto";
            header("location:alternativo.php");
         }else if ($user != $usuario && $pass != $password){
            $respuesta= "usuario o contraseña incorrecta";
            header("location:alternativo.php");
         }
            
                
         
         
      }
   }
}
echo ($respuesta);