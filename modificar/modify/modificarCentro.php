<?php
require_once'../../insertar/DataBaseClass.php';
$cod_centro=$_POST['cod_centro'];
try{
	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from centro where cod_centro='$cod_centro'";
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
<form  name="karen" method="post" action="modCentro.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td width="18">des_centro</td>
        <td width="18">Tel_centro</td>
        <td width="18">dir_centro</td>
        <td width="18">Cod_ciudad</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="cod_centro" value="<?php echo $row['cod_centro']?>">
        <td><input type="text" name="des_centro" value="<?php echo $row['des_centro']?>"></td>
        <td><input type="text" name="tel_centro" value="<?php echo $row['tel_centro']?>"></td>
        <td><input type="text" name="dir_centro" value="<?php echo $row['dir_centro']?>" size="5"></td>
        <td><input type="text" name="cod_ciudad" value="<?php echo $row['cod_ciudad']?>" size="5"></td>
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