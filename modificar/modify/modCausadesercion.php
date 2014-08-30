<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_causa=$_POST['cod_causa'];
$des_causa=$_POST['des_causa'];
$estado_causa=$_POST['estado_causa'];
try {
	$sql = "UPDATE causadesercion 
      SET des_causa =
       '$des_causa', estado_causa =
       '$estado_causa'   
      WHERE causadesercion.cod_causa = '$cod_causa';";
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