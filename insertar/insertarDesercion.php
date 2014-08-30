<?php
require_once 'DataBaseClass.php';
$num_doc =  $_POST['num_doc'];
$fecha  =  $_POST['fecha'];
$id_apre  =  $_POST['id_apre'];
$num_ficha  =  $_POST['num_ficha'];
$cod_causa  =  $_POST['cod_causa'];
$fecha_desercion  =  $_POST['fecha_desercion'];
$fase_desercion  =  $_POST['fase_desercion'];
try {
				$sql="INSERT INTO desercion"."(num_doc,fecha,id_apre,num_ficha,cod_causa,fecha_desercion,fase_desercion) "."VALUES ('$num_doc','$fecha','$id_apre','$num_ficha','$cod_causa','$fecha_desercion','$fase_desercion')";
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