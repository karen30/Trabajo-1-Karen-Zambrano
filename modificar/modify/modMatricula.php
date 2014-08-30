<?php
require_once ('../../insertar/DataBaseClass.php');
$num_ficha = $_POST['num_ficha'];
$id_apre = $_POST['id_apre'];
$estado = $_POST['estado'];
try {
	$sql = "UPDATE matricula 
      SET num_ficha =
       '$num_ficha', estado =
       '$estado'
      WHERE matricula.id_apre = '$id_apre';";
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