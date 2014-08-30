<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_rh = $_POST['cod_rh'];
$des_rh = $_POST['des_rh'];
try {
	$sql = "UPDATE rh 
      SET des_rh =
       '$des_rh'
      WHERE rh.cod_rh = '$cod_rh';";
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