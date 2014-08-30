<?php
require_once 'DataBaseClass.php';
$cod_ciudad=$_POST['cod_ciudad'];
$nom_ciudad=$_POST['nom_ciudad'];
$cod_depto=$_POST['cod_depto'];
$habitantes=$_POST['habitantes'];
 try {
				$sql="INSERT INTO ciudad"."(cod_ciudad,nom_ciudad,cod_depto,habitantes) "."VALUES ('$cod_ciudad','$nom_ciudad','$cod_depto','$habitantes')";
                $objDB= new DataBaseClass('localhost','bddesercion','root','');
                $objDB->getInstance()->beginTransaction();
                $objDB->getInstance()-> exec ($sql);
                $objDB->getInstance()->commit();
		echo 'se insertaron los datos corretamente';
 }
           catch (PDOException $ex) {
               $objDB ->getInstance()->rollback();
                echo $ex->getMessage();
            }

?>