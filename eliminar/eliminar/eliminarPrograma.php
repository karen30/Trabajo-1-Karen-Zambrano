<?php
require_once'../../insertar/DataBaseClass.php';
$cod_prog=$_POST['cod_prog'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT *from Programa where cod_prog='$cod_prog'";
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
<form  name="karen" method="post" action="delPrograma.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        
        <td width="18">Descricion programa</td>
        <td width="18">estado</td>
        
      </tr>
      <?php      foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="cod_prog" value="<?php echo $row['cod_prog']?>">
        <td><input type="text" name="des_prog" value="<?php echo $row['des_prog']?>"></td>
        <td><input type="text" name="estado" value="<?php echo $row['estado']?>"></td>
        
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