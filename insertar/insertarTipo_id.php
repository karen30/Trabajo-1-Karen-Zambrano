<?php
require_once 'DataBaseClass.php';
$cod_tipo_id=$_POST['cod_tipo_id'];
$des_tipo_id=$_POST['des_tipo_id'];
$siglas=$_POST['siglas'];
 try {
				$sql="INSERT INTO tipo_id"."(cod_tipo_id,des_tipo_id,siglas) "."VALUES ('$cod_tipo_id','$des_tipo_id','$siglas')";
                $objDB= new DataBaseClass('localhost','bddesercion','root','');
                $objDB->getInstance()->beginTransaction();
                $objDB->getInstance()-> exec ($sql);
                $objDB->getInstance()->commit();
		echo'se insertaron los datos corretamente';
 }
           catch (PDOException $ex) {
               $objDB ->getInstance()->rollback();
                echo $ex->getMessage();
            }
;
?>