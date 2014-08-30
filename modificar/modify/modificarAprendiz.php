<?php
require_once'../../insertar/DataBaseClass.php';
$id_apre=$_POST['id_apre'];
try{
	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from aprendiz where id_apre='$id_apre'";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOExcepcion $ex){
	echo $exc->getmessage();
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form name="karen" method="post" action="modAprendiz.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td width="18">Nombre Aprendiz</td>
        <td width="18">Apellido Aprendiz</td>
        <td width="18">Telefono Aprendiz</td>
        <td width="18">Codigo Ciudad</td>
        <td width="18">Codigo Tipo Id</td>
        <td width="18">Codigo RH</td>
        <td width="18">Genero</td>
        <td width="28">Edad</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
      <input type="hidden" name="id_apre" value="<?php echo $row['id_apre']?>">
        <td><input type="text" name="nom_apre" value="<?php echo $row['nom_apre']?>"></td>
        <td><input type="text" name="apel_apre" value="<?php echo $row['apel_apre']?>"></td>
        <td><input type="text" name="tel_apre" value="<?php echo $row['tel_apre']?>"></td>
        <td><input type="text" name="cod_ciudad" value="<?php echo $row['cod_ciudad']?>" size="5"></td>
        <td><input type="text" name="cod_tipo_id" value="<?php echo $row['cod_tipo_id']?>" size="5"></td>
        <td><input type="text" name="cod_rh" value="<?php echo $row['cod_rh']?>" size="5"></td>
        <td><input type="text" name="genero" value="<?php echo $row['genero']?>" size="5"></td>
        <td><input type="text" name="edad" value="<?php echo $row['edad']?>" size="5"></td>
      </tr>
      <?php endforeach ?>
      <tr>
        <td colspan="8"><div align="center">
          <input type="submit" value="Modificar">
        </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>