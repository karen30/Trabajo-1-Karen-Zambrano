<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_centro=$_POST['cod_centro'];
$des_centro=$_POST['des_centro'];
$tel_centro=$_POST['tel_centro'];
$dir_centro=$_POST['dir_centro'];
$cod_ciudad=$_POST['cod_ciudad'];
try {
	$sql = "DELETE from centro where cod_centro='$cod_centro'";
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