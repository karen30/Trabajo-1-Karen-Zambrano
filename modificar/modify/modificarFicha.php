<?php
require_once'../../insertar/DataBaseClass.php';
$num_ficha=$_POST['num_ficha'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from Ficha where num_ficha='$num_ficha'";
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
<form  name="karen" method="post" action="modFicha.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        
        <td width="18">Codigo programa</td>
        <td width="18">Fecha inicio</td>
        <td width="18">Fecha fin</td>
        <td width="18">Codigo centro</td>
      </tr>
      <?php foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="num_ficha" value="<?php echo $row['num_ficha']?>">
        <td><input type="text" name="cod_programa" value="<?php echo $row['cod_programa']?>"></td>
        <td><input type="text" name="fecha_ini" value="<?php echo $row['fecha_ini']?>"></td>
        <td><input type="text" name="fecha_fin" value="<?php echo $row['fecha_fin']?>"></td>
        <td><input type="text" name="cod_centro" value="<?php echo $row['cod_centro']?>" size="5"></td>
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