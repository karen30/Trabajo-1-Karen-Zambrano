<?php
require_once'../../insertar/DataBaseClass.php';
$id_apre=$_POST['id_apre'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from Matricula where id_apre ='$id_apre'";
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
<form  name="karen" method="post" action="modMatricula.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        <td width="18">Numero ficha</td>
        <td width="18">Estado</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="id_apre" value="<?php echo $row['id_apre']?>">
        <td><input type="text" name="num_ficha" value="<?php echo $row['num_ficha']?>"></td>
        <td><input type="text" name="estado" value="<?php echo $row['estado']?>"></td>
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