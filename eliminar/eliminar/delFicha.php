<?php
require_once ('../../insertar/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$cod_programa = $_POST['cod_programa'];
$fecha_ini = $_POST['fecha_ini'];
$fecha_fin = $_POST['fecha_fin'];
$cod_centro = $_POST['cod_centro'];
try {
	$sql = "DELETE from ficha where num_ficha='$num_ficha'";
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