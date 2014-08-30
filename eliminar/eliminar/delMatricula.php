<?php
require_once ('../../insertar/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$id_apre = $_POST['id_apre'];
$estado = $_POST['estado'];
try {
	$sql = "DELETE from matricula where id_apre='$id_apre'";
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