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
	$sql="SELECT * from ciudad";
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
      <td><a href="insertar/indexCiudad.php">
        <input type="button" value="insertar">
      </a></td>
      <td><a href="modificar/indexCiudad.php">
        <input type="button" value="modificar">
      </a></td>
      <td><a href="eliminar/indexCiudad.php">
        <input type="button" value="eliminar"></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="298" border="4">
    <tr>
      <td width="71">cod_ciudad</td>
      <td width="74"><p>nom_ciudad</p></td>
      <td width="66"><p>cod_depto</p></td>
      <td width="53"><p>habitantes</p></td>
      
    </tr>
    <?php foreach ($arrData as $row):?>
    <tr>
      <td><?php echo $row['cod_ciudad']?></td>
      <td><?php echo $row['nom_ciudad']?></td>
      <td><?php echo $row['cod_depto']?></td>
      <td><?php echo $row['habitantes']?></td>
      </tr>
    <?php endforeach ?>
  </table>
</div>

</body>
</html>