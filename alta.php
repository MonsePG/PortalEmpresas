<?php  
    session_start();
    date_default_timezone_set('UTC');
   
    $Id_Usuario = $_POST['Id_Usuario'];
    $Id_Categoria = $_POST['Id_Categoria'];
    $Id_Direccion = $_POST['Id_Direccion'];
    $Nombre = $_POST['Nombre'];
    // $Imagen = addslashes(file_get_contents($_FILES["Imagen"]["tmp_name"]));
    $Imagen =  new CURLFile($_FILES["Imagen"]["tmp_name"], $_FILES["Imagen"]["type"], $_FILES["Imagen"]["name"]);
   // $tmpfile = $_FILES["imagen"]["tmp_name"];    
    $Telefono = $_POST['Telefono'];
    $Correo = $_POST['Correo'];
    $H_Open = $_POST['H_Open'];
    $H_Close = $_POST['H_Close'];
    $Fecha_Crea = date('Y-m-d');
    $Descripcion = $_POST['Descripcion'];
    $Activo = $_POST['Activo'];

    if( $_FILES['Imagen']['size'] > 1000000 ) {
        echo "No se pueden subir archivos con pesos mayores a 1MB";
      } else {
      
    //$nombrearchivo = basename($_FILES['imagen']['name']);
    //$file = new CURLFile($tmpfile,$_FILES['imagen']['type'], $nombrearchivo);
    $campos = array(
      'Id_Usuario' => $Id_Usuario, 
      'Id_Categoria' => $Id_Categoria, 
      'Id_Direccion' => $Id_Direccion, 
      'Nombre' => $Nombre, 
      'Imagen' => $Imagen, 
      'Telefono' => $Telefono, 
      'Correo' => $Correo, 
      'H_Open' => $H_Open, 
      'H_Close' => $H_Close, 
      'Fecha_Crea' => $Fecha_Crea, 
      'Descripcion' => $Descripcion, 
      'Activo' => $Activo
    );

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://web-api-ps.herokuapp.com/api/v1/consultarpyme/altaEmpresa");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: multipart/form-data'));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $campos);
    $data = curl_exec($ch);
    $RespuestaServer = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);
    if($RespuestaServer == 200){
      header("location: info_ofertas_promo.php");
      }
    }
?>