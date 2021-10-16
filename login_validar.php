<?php
session_start();
$Correo = $_POST['Correo'];
$Password = $_POST['Password'];

$campos = array(
    'Correo' => $Correo, 
    'Contrasena' => $Password,
  );

  try {
    $campos_string = http_build_query($campos);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://web-api-ps.herokuapp.com/api/v1/sesion/loginEmpresa");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $campos_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $data = curl_exec($ch);
    curl_close($ch);
    $resp = json_decode($data);
    $ok = $resp->ok;

    if($ok == true){
        $Id = $resp->msg[0]->Id_Usuario;
        $Id_empresa = $resp->msg[0]->Id_Empresa;
        $Correo = $resp->msg[0]->Correo;

        $_SESSION['Id_Usuario'] = $Id;
        $_SESSION['Id_Empresa'] = $Id_empresa;
        $_SESSION['Correo'] = $Correo;
        header("location: info_ofertas_promo.php");
    }else {
        $_SESSION['error'] = $resp->msg;
        header("location: login.php");
    }
  } catch (Exception $e) {
    echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }
?>
    