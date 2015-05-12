<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<? 

 $codigo=$_REQUEST["codigo"]; 

 $nombre=$_REQUEST["nombre"]; 

 $cantiExistencia=$_REQUEST["cantiExistencia"]; 

 $tamaño=$_REQUEST["tamaño"]; 

 $precio=$_REQUEST["precio"]; 

 $conectado=@mysql_connect("localhost","root","root") or die ("no se logro la conexion"); 

 $db=mysql_select_db("abarrotes"); 

 $query="select * from productos where codigo='".$codigo."'"; 

 $qry=mysql_query($query); 

 $i=mysql_num_rows($qry); 

 if ($i>0) 

 { ?>

 </p>

 <p>&nbsp; </p>

 <p>

 <script language="JavaScript" type="text/javascript"> 

alert("El artiulo ya existe"); 

location.href="altasArticulo.html"; 

</script>

 <? 

} 

else 

{

$nuevo="insert into productos values 

('".$codigo."','".$nombre."','".$cantiExistencia."','".$tamaño."','".$precio."')"; 

$qry=mysql_query($nuevo);

} 

mysql_close($conectado); 

?>

 </p>

 <p align="center">&nbsp;</p>

 <div align="center"><em> <font size="5" face="Dauphin"> <font size="+5

">se han dado de alta los datos.</font></font>

  </p>

 </em></div>

</div>
</body>
</html>
