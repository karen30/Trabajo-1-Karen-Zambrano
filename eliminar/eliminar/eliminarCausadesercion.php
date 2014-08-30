<?php
require_once ('../../insertar/DataBaseClass.php');
$cod_causa=$_POST['cod_causa'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT *from Causadesercion where cod_causa='$cod_causa'";
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
<form  name="karen" method="post" action="delCausadesercion.php">
  <div align="center">
    <table width="490" border="1">
      <tr>
       
        <td width="144">Descricion causa</td>
        <td width="144">Estado causa</td>
      </tr>
      <?php foreach ($arrData as $row) :?>
      <tr>
        <input type="hidden" name="cod_causa" value="<?php echo $row['cod_causa']?>">
        <td><input type="text" name="des_causa" value="<?php echo $row['des_causa']?>"></td>
        <td><input type="text" name="estado_causa" value="<?php echo $row['estado_causa']?>"></td>
       
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