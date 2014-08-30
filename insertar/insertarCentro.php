<?php
require_once 'DataBaseClass.php';
$cod_centro=$_POST['cod_centro'];
$des_centro=$_POST['des_centro'];
$tel_centro=$_POST['tel_centro'];
$dir_centro=$_POST['dir_centro'];
$cod_ciudad=$_POST['cod_ciudad'];
try {
				$sql="INSERT INTO centro"."(cod_centro,des_centro,tel_centro,dir_centro,cod_ciudad) "."VALUES ('$cod_centro','$des_centro','$tel_centro','$dir_centro','$cod_ciudad')";
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

echo "</PRE>";
?>