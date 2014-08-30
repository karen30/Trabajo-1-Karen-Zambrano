<?php
require_once 'DataBaseClass.php';
$cod_prog=$_POST['cod_prog'];
$des_prog=$_POST['des_prog'];
$estado=$_POST['estado'];
 try {
				$sql="INSERT INTO programa"."(cod_prog,des_prog,estado) "."VALUES ('$cod_prog','$des_prog','$estado')";
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
