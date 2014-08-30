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
<div align="center">insertar registros
</div>
<div align="center">
<form action="insertar.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>codigo programa</td>
      <td> <input type="text" name="cod_programa" id="textfield"></td>
    </tr>
    <tr>
      <td>descripcion programa</td>
      <td> <input type="text" name="des_programa" id="textfield2"></td>
    </tr>
    <tr>
      <td>estado</td>
      <td> <input type="text" name="estado"></td>
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