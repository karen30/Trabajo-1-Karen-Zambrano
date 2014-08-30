<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_centro=$_POST['cod_centro'];
$sql="SELECT *from centro where cod_centro='$cod_centro'";
try{
	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $exc){
	echo $ex->getmessage();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
<form  name="karen" method="post" action="delCentro.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td>des_centro</td>
        <td>Tel_centro</td>
        <td>dir_centro</td>
        <td>Cod_ciudad</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
          <td><input type="text" name="des_centro" value="<?php echo $row['des_centro'] ?>"</td>
          <td><input type="text" name="tel_centro" value="<?php echo $row['tel_centro']?>"</td>
          <td><input type="text" name="dir_centro" value="<?php echo $row['dir_centro']?>"</td>
          <td><input type="text" name="cod_ciudad" value="<?php echo $row['cod_ciudad']?>"></td>
      </tr>
      <?php endforeach ?>
      <tr>
        <td colspan="8"><div align="center">
          <input type="submit" value="Eliminar">
        </div></td>
      </tr>
    </table>
  </div>
</form>
</body>
</html>