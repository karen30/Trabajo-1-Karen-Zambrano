<?php
require_once '../../insertar/DataBaseClass.php';
$id_apre = $_POST['id_apre'];
$nom_apre = $_POST['nom_apre'];
$apel_apre = $_POST['apel_apre'];
$tel_apre= $_POST['tel_apre'];
$cod_ciudad = $_POST['cod_ciudad'];
$cod_tipo_id = $_POST['cod_tipo_id'];
$cod_rh = $_POST['cod_rh'];
$genero = $_POST['genero'];
$edad= $_POST['edad'];
try {
	$sql = "DELETE from aprendiz where id_apre='$id_apre'";
    $objDB = new DataBaseClass('localhost', 'bddesercion', 'root', '');
    $objDB->getInstance()->beginTransaction();
    $objDB->getInstance()->exec($sql);
    $objDB->getInstance()->commit();
	echo 'se eliminaron los datos correctamente';
} catch (PDOException $ex) {
    $objDB->getInstance()->rollback();
    echo $ex->getMessage();
}

?>