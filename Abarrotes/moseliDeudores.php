<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form name="form1" method="post" action="elitodoDeudores.php">

 <?

$nombre=$_REQUEST["nombre"]; 

$conectado=@mysql_connect("localhost","root","root") or die ("no se logro la conexion"); 

$db=mysql_select_db("abarrotes"); 

$query="select * from deudores where nombre='".$nombre."'"; 

$qry=mysql_query($query); 

$i=mysql_num_rows($qry);

if ($i==0)

{ 

?>

 <p>

 <script language="JavaScript" type="text/javascript"> 

alert("El deudor no existe"); 

location.href="EliminarDeudores.html"; 

</script>

 <? 

} 

else 

{

 $r=0; 

 $row=0; 

 mysql_data_seek($qry,$r); 

 $row=mysql_fetch_object($qry); 

 mysql_close($conectado); 

 } 

 ?>
 <table width="1043" height="77" border="1">
   <tr>
     
     <td width="269"><div align="center">nombre</div></td>
	 <td width="200"><div align="center">domicilio</div></td>
     <td width="200"><div align="center">deuda</div></td>
     <td width="186"><div align="center">abono</div></td>
     <td width="221"><div align="center">total</div></td>
   </tr>
   <tr>
     <td><input type="text" name="nombre" value="<? print $row->nombre; ?>" readonly="readonly" >&nbsp;</td>
     
	 <td align="center" valign="middle"><? print $row->domicilio; ?>&nbsp;</td>
      <td align="center" valign="middle"><? print $row->deuda; ?>&nbsp;</td>
     <td align="center" valign="middle"><? print $row->abono; ?>&nbsp;</td>
	  <td align="center" valign="middle"><? print $row->total; ?>&nbsp;</td>
   </tr>
   <tr>
     <td colspan="5"><label>
       <div align="center">
         <input type="submit" name="Submit" value="Eliminar" />
          <input name="button" type="button" onClick="Cancelar()"value="Cancelar"> 
         </div>
     </label></td>
   </tr>
 </table>
 </form>
 <script language="JavaScript" type="text/javascript">

function Cancelar(){

location.href="eliminarDeudores.html";

}

</script>
</body>
</html>
