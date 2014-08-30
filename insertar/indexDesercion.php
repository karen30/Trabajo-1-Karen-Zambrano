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
<div align="center">insertar registros desercion</div>
<div align="center">
<form action="insertarDesercion.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>num_doc</td>
      <td> <input type="text" name="num_doc" ></td>
    </tr>
    <tr>
      <td>fecha</td>
      <td><input type="text" name="fecha"></td>
    </tr>
    <tr>
      <td>id_apre</td>
      <td><input type="text" name="id_apre"></td>
    </tr>
    <tr>
      <td>num_ficha</td>
      <td><input type="text" name="num_ficha"></td>
    </tr>
    <tr>
      <td>cod_causa</td>
      <td><input type="text" name="cod_causa"></td>
    </tr>
    <tr>
      <td>fecha_desercion</td>
      <td><input type="text" name="fecha_desercion"></td>
    </tr>
    <tr>
      <td>fase_desercion</td>
      <td><input type="text" name="fase_desercion"></td>
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