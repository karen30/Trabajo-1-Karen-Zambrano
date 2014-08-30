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
<div align="center">insertar registros centro</div>
<div align="center">
<form action="insertarCentro.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>cod_centro</td>
      <td> <input type="text" name="cod_centro" ></td>
    </tr>
    <tr>
      <td>des_centro</td>
      <td><input type="text" name="des_centro"></td>
    </tr>
    <tr>
      <td>tel_centro</td>
      <td><input type="text" name="tel_centro"></td>
    </tr>
    <tr>
      <td>dir_centro</td>
      <td><input type="text" name="dir_centro"></td>
    </tr>
    <tr>
      <td>cod_ciudad</td>
      <td><input type="text" name="cod_ciudad"></td>
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