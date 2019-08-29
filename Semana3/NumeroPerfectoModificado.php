<?php
//var_dump($_GET);
echo $_GET ["nombre"];
   $acumuladorAnterior=0;
   //$numero=28;
   $numero=$_GET["numero"];

   for ($contador=1;$contador<$numero;$contador++)
   {
     if ($numero%$contador==0)
      {
      	$acumuladorAnterior=$acumuladorAnterior+$contador;
      }

   }
 if ($numero==$acumuladorAnterior)
 {
   echo "Es perfecto";
 }
 else
  {
    echo "No es perfecto";
  }
?>


