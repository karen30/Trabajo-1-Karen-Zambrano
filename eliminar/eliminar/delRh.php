<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_rh = $_POST['cod_rh'];
$des_rh = $_POST['des_rh'];
try {
	$sql = "DELETE from rh where cod_rh='$cod_rh'";
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