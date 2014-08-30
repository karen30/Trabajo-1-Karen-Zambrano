<?php
require_once'../../insertar/DataBaseClass.php';
$cod_tipo_id=$_POST['cod_tipo_id'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from Tipo_id where cod_tipo_id='$cod_tipo_id'";
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
<form  name="karen" method="post" action="modTipo_id.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        
        <td width="18">Descricion tipo identificacion</td>
        <td width="18">siglas</td>
        
      </tr>
      <?php foreach ($arrData as $row):?>
      <tr>
        <input type="hidden" name="cod_tipo_id" value="<?php echo $row['cod_tipo_id']?>">
        <td><input type="text" name="des_tipo_id" value="<?php echo $row['des_tipo_id']?>"></td>
        <td><input type="text" name="siglas" value="<?php echo $row['siglas']?>"></td>
        
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