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
	$sql="select nom_apre,des_tipo_id,des_centro,des_causa from aprendiz,tipo_id,centro,causadesercion,desercion,ficha where desercion.id_apre=aprendiz.id_apre and desercion.num_ficha=ficha.num_ficha and desercion.cod_causa=causadesercion.cod_causa and aprendiz.cod_tipo_id=tipo_id.cod_tipo_id and ficha.cod_centro=centro.cod_centro and genero='f' and des_causa='retiro voluntario'";
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
	background-color: #6FF;
}
</style>

<table width="546" border="4">
  <tr>
    <td width="128">nombre aprendiz</td>
    <td width="128">des_tipo_id</td>
    <td width="128">des_centro</td>
    <td width="128">des_causa</td>
  </tr>
  <tr>
    <td><?php echo $row['nom_apre']?></td
    ><td><?php echo $row['des_tipo_id']?></td>
    <td><?php echo $row['des_centro']?></td>
    <td><?php echo $row['des_causa']?></td>
  </tr>
</table>
<?php endforeach ?>
</body>
</html>