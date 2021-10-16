<?php
session_start();

$Nombre = $_POST['Nombre'];
$Correo = $_POST['Correo'];
$Password = $_POST['Password'];
$PasswordConfirm = $_POST['PasswordConfirm'];

$campos = array(
    'Nombre' => $Nombre, 
    'Correo' => $Correo, 
    'Contrasena' => $Password,
    'Id_Rol' => "2",
  );

  try {
    $campos_string = http_build_query($campos);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://web-api-ps.herokuapp.com/api/v1/sesion/altaUsuario");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $campos_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);

    $usuario = json_decode($data);
    //$ok = $usuario->ok;
    if($ok == 0){
        $Id = $usuario->msg->Id_Usuario;
        $Nombre_resp = $usuario->msg->Nombre;
        $Correo_resp = $usuario->msg->Correo;
        
        $_SESSION['Id_Usuario']= $Id;
        $_SESSION['Nombre']= $Nombre_resp;
        $_SESSION['Correo']= $Correo_resp;
        header("location: info_gral.php");
    }else {
        echo "Error". $usuario;
        $_SESSION['error'] = $usuario->msg;
        header("location: register.php");
    }
  } catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }

?>
    