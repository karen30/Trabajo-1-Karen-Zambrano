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
<div align="center">insertar registros ciudad</div>
<div align="center">
<form action="insertarCiudad.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>cod_ciudad</td>
      <td> <input type="text" name="cod_ciudad" ></td>
    </tr>
    <tr>
      <td>nom_ciudad</td>
      <td><input type="text" name="nom_ciudad"></td>
    </tr>
    <tr>
      <td>cod_depto</td>
      <td><input type="text" name="cod_depto"></td>
    </tr>
    <tr>
      <td>habitantes</td>
      <td><input type="text" name="habitantes"></td>
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