<?php
    require_once('conexion.php');
    $conn = new Conexion();
    $conexion = $conn->Conectar();

    /*$query='select * from TBL_USUARIO_BANCK';
    $stm = $conexion->prepare($query);
    &stm->execute();
    while(&row==$stm->fetch(PDO::FETCH_ASSOC)){
        echo 'NombreCampoEnPagina: '.$row['NOMBRE_COLUMNA_DB'].'<BR>';
        echo 'Nombre: '.$row['NOMBRE'].'<BR>';
        echo 'DPI: '.$row['DPI'].'<BR>';
        echo 'Direccion: '.$row['DIRECCION'].'<BR>';
        echo '<BR>';
        //PROBAR ESTA CONEXION CON DATOS DE ALGUNA TABLA EN DB
        //SEMANA 10, clase 25-03-2022 minuto 43:10
    }


    */
?>