<?php
require_once 'DataBaseClass.php';
$cod_depto=$_POST['cod_depto'];
$nom_depto=$_POST['nom_depto'];
try {
				$sql="INSERT INTO depto"."(cod_depto,nom_depto) "." VALUES ('$cod_depto','$nom_depto')";
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