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
<div align="center">insertar registros causadesercion</div>
<div align="center">
<form action="insertarCausadesercion.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>cod_causa</td>
      <td> <input type="text" name="cod_causa" ></td>
    </tr>
    <tr>
      <td>des_causa</td>
      <td><input type="text" name="des_causa"></td>
    </tr>
    <tr>
      <td>estado causa</td>
      <td><input type="text" name="estado_causa"></td>
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