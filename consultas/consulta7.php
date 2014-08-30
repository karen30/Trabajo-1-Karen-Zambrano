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
	$sql="select count(aprendiz.id_apre),des_causa from aprendiz,causadesercion,ficha,desercion,centro where desercion.id_apre=aprendiz.id_apre and desercion.num_ficha=ficha.num_ficha and desercion.cod_causa=causadesercion.cod_causa and ficha.cod_centro=centro.cod_centro and centro.cod_centro='1' group by des_causa";
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
<?php foreach ($arrData as $row):?>
<style type="text/css">
body,td,th {
	color: #000;
}
body {
	background-color: #F00;
}
</style>

<table width="278" border="4">
  <tr>
    <td width="128">id_aprendiz</td>
    <td width="128">des_causa</td>
  </tr>
  <tr>
    <td><?php echo $row['count(aprendiz.id_apre)']?></td
    ><td><?php echo $row['des_causa']?></td>
  </tr>
</table>
<?php endforeach ?>
</body>
</html>