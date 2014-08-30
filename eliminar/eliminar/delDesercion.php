<?php
require_once ('../../insertar/DataBaseClass.php');
$num_doc=$_POST['num_doc'];
$fecha=$_POST['fecha'];
$id_apre=$_POST['id_apre'];
$num_ficha=$_POST['num_ficha'];
$cod_causa=$_POST['cod_causa'];
$fecha_desercion=$_POST['fecha_desercion'];
$fase_desercion=$_POST['fase_desercion'];
try {
    $sql = "DELETE from desercion where num_doc='$num_doc'";
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