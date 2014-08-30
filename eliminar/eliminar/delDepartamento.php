<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_depto=$_POST['cod_depto'];
$nom_depto=$_POST['nom_depto'];
try {
	$sql = "DELETE from depto where cod_depto='$cod_depto'";
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
	echo 'se eliminaron los datos correctamente';
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}

?>