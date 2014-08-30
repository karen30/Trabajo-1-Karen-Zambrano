<?php
require_once 'DataBaseClass.php';
$cod_prog=$_POST['cod_programa'];
$des_prog=$_POST['des_programa'];
$estado=$_POST['estado'];
$sql="INSERT INTO programa"."(cod_prog,des_prog,estado) "."VALUES ('$cod_prog','$des_prog','$estado')";
            try {
                $objDB= new DataBaseClass('localhost','bddesercion','root','');
                $objDB->getInstance()->beginTransaction();
                $objDB->getInstance()-> exec ($sql);
                $objDB->getInstance()->commit();
 }
           catch (PDOException $ex) {
               $objDB ->getInstance()->rollback();
                echo $ex->getMessage();
            }
echo "<PRE>";
echo "los campos cod_programa: ".$cod_prog." des_prog: ".$des_prog." estado:".$estado." se subieron con EXITO";
echo "</PRE>";