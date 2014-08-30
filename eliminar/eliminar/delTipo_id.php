<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_tipo_id = $_POST['cod_tipo_id'];
$des_tipo_id = $_POST['des_tipo_id'];
$siglas = $_POST['siglas'];
try {
	$sql= "DELETE from tipo_id where cod_tipo_id='$cod_tipo_id'";
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