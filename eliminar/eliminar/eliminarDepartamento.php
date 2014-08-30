<?php
require_once'../../insertar/DataBaseClass.php';
$cod_depto=$_POST['cod_depto'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT *from depto where cod_depto='$cod_depto'";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOException $exc){
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
<form  name="karen" method="post" action="delDepartamento.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td width="18">Nombre departamento</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="cod_depto" value="<?php echo $row['cod_depto']?>">
        <td><input type="text" name="nom_depto" value="<?php echo $row['nom_depto']?>"></td>
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