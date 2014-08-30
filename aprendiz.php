<?php
class DataBaseClass{
	private $host,
	$dbname,
	$port,
	$user,
	$pasword,
	$driver,
	$connect;

	public function __construct($host,$dbname,$user,$pasword,$port='3306',$drive='mysql')

	{
		$this->host=$host;
		$this->dbname=$dbname;
		$this->user=$user;
		$this->pasword=$pasword;
		$this->port=$port;
		$this->drive=$drive;
	}
//getInstancia:PEDIMOS LA INSTANCIA
	public function getInstance() {
	//$this->connect cambia la afirmacion, si es verdadero se invierte.
		if(!$this->connect) {
			try{
				$dsn=$this->drive
				.':host='
				.$this->host
				.';dbname='.$this->dbname
				.';port='.$this->port;
				$this->connect= new PDO($dsn,$this->user,
					$this->pasword);
			}catch(PDOException $exc){
				echo $exc->getMessage();
		//muerte:die();	
			}
		}
		Return $this->connect;



	}
}
try{

	$objDB=new DataBaseClass('localhost','bddesercion','root','');
	$sql="SELECT * from aprendiz";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
         //$db= new PDO($dsn,$username,$passwd);
         //$sql='SELECT * FROM usuario';
         //$src=$db->query($sql);
         //$arrData=$src->fetchAll(PDO::FETCH_ASSOC);

}catch (PDOExcepcion $ex){
	echo $exc->getmessage();

}



?>
<html>
<head><title></title>
<meta charset="utf-8">
<style type="text/css">
body,td,th {
	color: #000;
}
body {
	background-color: #00F;
}
</style>
</head>
<body>

<div align="center">
  <table width="200" border="1">
    <tr>
      <td><a href="insertar/indexAprendiz.php">
        <input type="button" value="insertar">
      </a></td>
      <td><a href="modificar/indexAprendiz.php">
        <input type="button" value="modificar">
      </a></td>
      <td><a href="eliminar/indexAprendiz.php">
        <input type="button" value="eliminar"></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="200" border="4">
    <tr>
      <td width="128">id_apre</td>
      <td width="50"><p>nom_apre</p></td>
      <td width="128">apel_apre</td>
      <td width="128">tel_apre</td>
      <td width="128">cod_ciudad</td>
      <td width="128">cod_tipo_id</td>
      <td width="128">cod_rh</td>
      <td width="128">genero</td>
      <td width="128">edad</td>
    </tr>
    <?php foreach ($arrData as $row):?>
    <tr>
      <td><?php echo $row['id_apre']?></td>
      <td><?php echo $row['nom_apre']?></td>
      <td><?php echo $row['apel_apre']?></td>
      <td><?php echo $row['tel_apre']?></td>
      <td><?php echo $row['cod_ciudad']?></td>
      <td><?php echo $row['cod_tipo_id']?></td>
      <td><?php echo $row['cod_rh']?></td>
      <td><?php echo $row['genero']?></td>
      <td><?php echo $row['edad']?></td>
    </tr>
    <?php endforeach ?>
  </table>
</div>

</body>
</html>