<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form name="form1" method="post" action="elitodoProveedores.php">

 <?

$codigo=$_REQUEST["codigo"]; 

$conectado=@mysql_connect("localhost","root","root") or die ("no se logro la conexion"); 

$db=mysql_select_db("abarrotes"); 

$query="select * from proveedores where codigo='".$codigo."'"; 

$qry=mysql_query($query); 

$i=mysql_num_rows($qry);

if ($i==0)

{ 

?>

 <p>

 <script language="JavaScript" type="text/javascript"> 

alert("El proveedor no existe"); 

location.href="eliminarProveedores.html"; 

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
     <td width="133"><div align="center">codigo</div></td>
     <td width="200"><div align="center">nombre</div></td>
     <td width="186"><div align="center">telefono</div></td>
     <td width="221"><div align="center">domicilio</div></td>
   </tr>
   <tr>
     <td><input type="text" name="codigo" value="<? print $row->codigo; ?>" readonly="readonly" >&nbsp;</td>
     
    
      <td align="center" valign="middle"><? print $row->nombre; ?>&nbsp;</td>
     <td align="center" valign="middle"><? print $row->telefonp ?>&nbsp;</td>
	  <td align="center" valign="middle"><? print $row->domicilio; ?>&nbsp;</td>
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

location.href="eliminarProveedores.html";

}

</script>
</body>
</html>
