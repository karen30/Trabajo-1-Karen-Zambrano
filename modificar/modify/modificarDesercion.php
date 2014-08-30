<?php
require_once'../../insertar/DataBaseClass.php';
$num_doc=$_POST['num_doc'];
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from Desercion where num_doc='$num_doc'";
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
<form  name="karen" method="post" action="modDesercion.php">
  <div align="center">
    <table width="206" border="1">
      <tr>
        
        <td width="18">Fecha</td>
        <td width="18">Identificacion aprendiz</td>
        <td width="18">Numero de ficha</td>
        <td width="18">Codigo causa</td>
        <td width="18">Fecha desercion</td>
        <td width="18">Fase desercion</td>
        
      </tr>
      <?php      foreach ($arrData as $row):?>
      <tr>
        <input type="hidden" name="num_doc" value="<?php echo $row['num_doc']?>">
        <td><input type="text" name="fecha" value="<?php echo $row['fecha']?>"></td>
        <td><input type="text" name="id_apre" value="<?php echo $row['id_apre']?>"></td>
        <td><input type="text" name="num_ficha" value="<?php echo $row['num_ficha']?>"></td>
        <td><input type="text" name="cod_causa" value="<?php echo $row['cod_causa']?>" size="5"></td>
        <td><input type="text" name="fecha_desercion" value="<?php echo $row['fecha_desercion']?>" size="5"></td>
         <td><input type="text" name="fase_desercion" value="<?php echo $row['fase_desercion']?>" size="5"></td>
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