<?php
require_once'../../insertar/DataBaseClass.php';
$cod_rh=$_POST['cod_rh'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT *from RH where cod_rh='$cod_rh'";
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
<form  name="karen" method="post" action="delRH.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
       
        <td width="18">Descricion rh</td>
        
      </tr>
      <?php  foreach ($arrData as $row): ?>
      <tr>
        <input type="hidden" name="cod_rh" value="<?php echo $row['cod_rh']?>">
        <td><input type="text" name="des_rh" value="<?php echo $row['des_rh']?>"></td>
        
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