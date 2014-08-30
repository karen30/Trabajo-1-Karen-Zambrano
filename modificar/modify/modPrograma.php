<?php
require_once '../../insertar/DataBaseClass.php';
$cod_prog = $_POST['cod_prog'];
$des_prog = $_POST['des_prog'];
$estado = $_POST['estado'];
try {
	$sql = "UPDATE programa 
      SET des_prog =
       '$des_prog', estado =
       '$estado'
      WHERE programa.cod_prog = '$cod_prog';";
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