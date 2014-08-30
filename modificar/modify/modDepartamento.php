<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_depto=$_POST['cod_depto'];
$nom_depto=$_POST['nom_depto'];
try {
	$sql = "UPDATE depto 
      SET nom_depto =
       '$nom_depto'
      WHERE depto.cod_depto = '$cod_depto';";
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