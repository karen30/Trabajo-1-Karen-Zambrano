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
<div align="center">insertar registros aprendiz</div>
<div align="center">
<form action="insertarAprendiz.php" name="karen" method="post">
  <table width="200" border="1">
    <tr>
      <td>id_apre</td>
      <td> <input type="text" name="id_apre" ></td>
    </tr>
    <tr>
      <td>nom_apre</td>
      <td><input type="text" name="nom_apre"></td>
    </tr>
    <tr>
      <td>apel_apre</td>
      <td><input type="text" name="apel_apre"></td>
    </tr>
    <tr>
      <td>tel_apre</td>
      <td><input type="text" name="tel_apre"></td>
    </tr>
    <tr>
      <td>cod_ciudad</td>
      <td><input type="text" name="cod_ciudad"></td>
    </tr>
    <tr>
      <td>cod_tipo_id</td>
      <td><input type="text" name="cod_tipo_id"></td>
    </tr>
    <tr>
      <td>cod_rh</td>
      <td><input type="text" name="cod_rh"></td>
    </tr>
    <tr>
      <td>genero</td>
      <td><input type="text" name="genero"></td>
    </tr>
    <tr>
      <td>edad</td>
      <td> <input type="text" name="edad" ></td>
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