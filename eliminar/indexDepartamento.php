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
<div align="center">eliminar registros Departamento
</div>
<div align="center">
<form action="eliminar/eliminarDepartamento.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>Codigo Departamento</td>
      <td> <input type="text" name="cod_depto"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" name="enviar" value="buscar y eliminar">
      </div></td>
      </tr>
  </table>
</form>
</div>
</body>
</html>