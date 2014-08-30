<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<style type="text/css">
body,td,th {
	color: #00C;
}
body {
	background-color: #F9C;
}
</style>
</head>

<body>
<div align="center">insertar registros Departamento
</div>
<div align="center">
<form action="insertarDepartamento.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>Codigo Departamento</td>
      <td> <input type="text" name="cod_depto"></td>
    </tr>
    <tr>
      <td>Nombre Departamento</td>
      <td> <input type="text" name="nom_depto"></td>
    </tr>
    <tr>
      <td><input type="submit" name="enviar" value="insertar registro"></td>
      <td><input type="reset" name="reset" value="limpiar"></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>