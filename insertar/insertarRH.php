<?php
require_once 'DataBaseClass.php';
$cod_rh=$_POST['cod_rh'];
$des_rh=$_POST['des_rh'];
try {
				$sql="INSERT INTO rh"."(cod_rh,des_rh) "."VALUES ('$cod_rh','$des_rh')";
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