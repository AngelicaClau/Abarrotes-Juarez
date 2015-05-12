<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php

$codigo=$_REQUEST["codigo"]; 

$conectado=@mysql_connect("localhost","root","root") or die ("no se logro la conexion"); 

$db=mysql_select_db("abarrotes"); 

$query="delete from proveedores where codigo='".$codigo."'"; 

$qry=mysql_query($query);

mysql_close($conectado);

?>

 </p>

 <p>&nbsp;</p>

 <p> Los datos se eliminaron </p>
</body>
</html>
