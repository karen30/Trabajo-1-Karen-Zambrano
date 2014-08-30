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
<div align="center">insertar registros rh</div>
<div align="center">
<form action="insertarRH.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>cod_rh</td>
      <td> <input type="text" name="cod_rh" ></td>
    </tr>
    <tr>
      <td>des_rh</td>
      <td><input type="text" name="des_rh"></td>
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