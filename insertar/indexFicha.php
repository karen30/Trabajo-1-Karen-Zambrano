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
<div align="center">insertar registros ficha</div>
<div align="center">
<form action="insertarFicha.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>num_ficha</td>
      <td> <input type="text" name="num_ficha" ></td>
    </tr>
    <tr>
      <td>cod_programa</td>
      <td><input type="text" name="cod_programa"></td>
    </tr>
    <tr>
      <td>fecha_ini</td>
      <td><input type="text" name="fecha_ini"></td>
    </tr>
    <tr>
      <td>fecha_fin</td>
      <td><input type="text" name="fecha_fin"></td>
    </tr>
    <tr>
      <td>cod_centro</td>
      <td><input type="text" name="cod_centro"></td>
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