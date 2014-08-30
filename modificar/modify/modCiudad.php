<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_ciudad=$_POST['cod_ciudad'];
$nom_ciudad=$_POST['nom_ciudad'];
$cod_depto=$_POST['cod_depto'];
$habitantes=$_POST['habitantes'];
try {
	$sql = "UPDATE ciudad 
      SET nom_ciudad =
       '$nom_ciudad', cod_depto =
       '$cod_depto', habitantes =
       '$habitantes'
      WHERE ciudad.cod_ciudad = '$cod_ciudad';";
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
	echo 'se modificaron los datos correctamente';
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}

?>