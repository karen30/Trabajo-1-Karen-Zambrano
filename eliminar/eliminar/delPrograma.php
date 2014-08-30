<?php
require_once '../../insertar/DataBaseClass.php';
$cod_prog = $_POST['cod_prog'];
$des_prog = $_POST['des_prog'];
$estado = $_POST['estado'];
try {
	$sql = "DELETE from programa where cod_prog='$cod_prog'";
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