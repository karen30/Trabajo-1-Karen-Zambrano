<?php
require_once 'DataBaseClass.php';
$num_ficha=$_POST['num_ficha'];
$id_apre=$_POST['id_apre'];
$estado=$_POST['estado'];
 try {
				$sql="INSERT INTO matricula"."(num_ficha,id_apre,estado) "."VALUES ('$num_ficha','$id_apre','$estado')";
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