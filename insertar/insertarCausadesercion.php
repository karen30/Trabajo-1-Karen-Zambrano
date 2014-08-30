<?php
require_once 'DataBaseClass.php';
$cod_causa=$_POST['cod_causa'];
$des_causa=$_POST['des_causa'];
$estado_causa=$_POST['estado_causa'];
try {
				$sql="INSERT INTO causadesercion"."(cod_causa,des_causa,estado_causa) "."VALUES ('$cod_causa','$des_causa','$estado_causa')";
                $objDB= new DataBaseClass('localhost','bddesercion','root','');
                $objDB->getInstance()->beginTransaction();
                $objDB->getInstance()-> exec ($sql);
                $objDB->getInstance()->commit();
	echo 'se insertaron los datos correctamente';
 }
           catch (PDOException $ex) {
               $objDB ->getInstance()->rollback();
                echo $ex->getMessage();
            }
?>