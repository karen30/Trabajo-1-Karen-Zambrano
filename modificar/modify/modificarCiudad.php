<?php
require_once'../../insertar/DataBaseClass.php';
$cod_ciudad=$_POST['cod_ciudad'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from ciudad where cod_ciudad='$cod_ciudad'";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOExcepcion $ex){
	echo $exc->getmessage();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form  name="karen" method="post" action="modCiudad.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td width="18">Nombre ciudad</td>
        <td width="18">Codigo departamento</td>
        <td width="18">habitantes</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="cod_ciudad" value="<?php echo $row['cod_ciudad']?>">
        <td><input type="text" name="nom_ciudad" value="<?php echo $row['nom_ciudad']?>"></td>
        <td><input type="text" name="cod_depto" value="<?php echo $row['cod_depto']?>"></td>
        <td><input type="text" name="habitantes" value="<?php echo $row['habitantes']?>" size="5"></td>
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