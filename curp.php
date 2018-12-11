<?php

$nombre = strtoupper($_POST["caja_nombre"]);
$primerAp = strtoupper($_POST["caja_primerApellido"]);
$segundoAp = strtoupper($_POST["caja_segundoApellido"]);
$fecha_año = $_POST["comboBox_año"];
$fecha_mes = $_POST["comboBox_mes"];
$fecha_dia = $_POST["comboBox_dia"];
$sexo =  strtoupper($_POST["comboBox_sexo"]);
$estado =  strtoupper($_POST["comboBox_estado"]);

$curp = substr($primerAp,0,2);


$curp .= substr($segundoAp,0,1);
$curp .= substr($nombre,0,1);

$curp .= $fecha_año;
$curp .= $fecha_mes;
$curp .= $fecha_dia;

$curp .= $sexo;
$curp .= $estado;


$contador = strlen($primerAp);
if($contador > strpos($primerAp,"B") and strpos($primerAp,"B")){
  $contador = strpos($primerAp,"B");
}
if($contador > strpos($primerAp,"C") and strpos($primerAp,"C")){
  $contador = strpos($primerAp,"C");
}
if($contador > strpos($primerAp,"D") and strpos($primerAp,"D")){
  $contador = strpos($primerAp,"D");
}
if($contador > strpos($primerAp,"F") and strpos($primerAp,"F")){
  $contador = strpos($primerAp,"F");
}
if($contador > strpos($primerAp,"G") and strpos($primerAp,"G")){
  $contador = strpos($primerAp,"G");
}
if($contador > strpos($primerAp,"H") and strpos($primerAp,"H")){
  $contador = strpos($primerAp,"H");
}
if($contador > strpos($primerAp,"J") and strpos($primerAp,"J")){
  $contador = strpos($primerAp,"J");
}
if($contador > strpos($primerAp,"K") and strpos($primerAp,"K")){
  $contador = strpos($primerAp,"K");
}
if($contador > strpos($primerAp,"L") and strpos($primerAp,"L")){
  $contador = strpos($primerAp,"L");
}
if($contador > strpos($primerAp,"M") and strpos($primerAp,"M")){
  $contador = strpos($primerAp,"M");
}
if($contador > strpos($primerAp,"N") and strpos($primerAp,"N")){
  $contador = strpos($primerAp,"N");
}
if($contador > strpos($primerAp,"Ñ") and strpos($primerAp,"Ñ")){
  $contador = strpos($primerAp,"Ñ");
}
if($contador > strpos($primerAp,"P") and strpos($primerAp,"P")){
  $contador = strpos($primerAp,"P");
}
if($contador > strpos($primerAp,"Q") and strpos($primerAp,"Q")){
  $contador = strpos($primerAp,"Q");
}
if($contador > strpos($primerAp,"R") and strpos($primerAp,"R")){
  $contador = strpos($primerAp,"R");
}
if($contador > strpos($primerAp,"S") and strpos($primerAp,"S")){
  $contador = strpos($primerAp,"S");
}
if($contador > strpos($primerAp,"T") and strpos($primerAp,"T")){
  $contador = strpos($primerAp,"T");
}
if($contador > strpos($primerAp,"V") and strpos($primerAp,"V")){
  $contador = strpos($primerAp,"V");
}
if($contador > strpos($primerAp,"W") and strpos($primerAp,"W")){
  $contador = strpos($primerAp,"W");
}
if($contador > strpos($primerAp,"X") and strpos($primerAp,"X")){
  $contador = strpos($primerAp,"X");
}
if($contador > strpos($primerAp,"Y") and strpos($primerAp,"Y")){
  $contador = strpos($primerAp,"Y");
}
if($contador > strpos($primerAp,"Z") and strpos($primerAp,"Z")){
  $contador = strpos($primerAp,"Z");
}

$curp .= substr($primerAp,$contador,1);

$contador = strlen($segundoAp);
if($contador > strpos($segundoAp,"B") and strpos($segundoAp,"B")){
  $contador = strpos($segundoAp,"B");
}
if($contador > strpos($segundoAp,"C") and strpos($segundoAp,"C")){
  $contador = strpos($segundoAp,"C");
}
if($contador > strpos($segundoAp,"D") and strpos($segundoAp,"D")){
  $contador = strpos($segundoAp,"D");
}
if($contador > strpos($segundoAp,"F") and strpos($segundoAp,"F")){
  $contador = strpos($segundoAp,"F");
}
if($contador > strpos($segundoAp,"G") and strpos($segundoAp,"G")){
  $contador = strpos($segundoAp,"G");
}
if($contador > strpos($segundoAp,"H") and strpos($segundoAp,"H")){
  $contador = strpos($segundoAp,"H");
}
if($contador > strpos($segundoAp,"J") and strpos($segundoAp,"J")){
  $contador = strpos($segundoAp,"J");
}
if($contador > strpos($segundoAp,"K") and strpos($segundoAp,"K")){
  $contador = strpos($segundoAp,"K");
}
if($contador > strpos($segundoAp,"L") and strpos($segundoAp,"L")){
  $contador = strpos($segundoAp,"L");
}
if($contador > strpos($segundoAp,"M") and strpos($segundoAp,"M")){
  $contador = strpos($segundoAp,"M");
}
if($contador > strpos($segundoAp,"N") and strpos($segundoAp,"N")){
  $contador = strpos($segundoAp,"N");
}
if($contador > strpos($segundoAp,"Ñ") and strpos($segundoAp,"Ñ")){
  $contador = strpos($segundoAp,"Ñ");
}
if($contador > strpos($segundoAp,"P") and strpos($segundoAp,"P")){
  $contador = strpos($segundoAp,"P");
}
if($contador > strpos($segundoAp,"Q") and strpos($segundoAp,"Q")){
  $contador = strpos($segundoAp,"Q");
}
if($contador > strpos($segundoAp,"R") and strpos($segundoAp,"R")){
  $contador = strpos($segundoAp,"R");
}
if($contador > strpos($segundoAp,"S") and strpos($segundoAp,"S")){
  $contador = strpos($segundoAp,"S");
}
if($contador > strpos($segundoAp,"T") and strpos($segundoAp,"T")){
  $contador = strpos($segundoAp,"T");
}
if($contador > strpos($segundoAp,"V") and strpos($segundoAp,"V")){
  $contador = strpos($segundoAp,"V");
}
if($contador > strpos($segundoAp,"W") and strpos($segundoAp,"W")){
  $contador = strpos($segundoAp,"W");
}
if($contador > strpos($segundoAp,"X") and strpos($segundoAp,"X")){
  $contador = strpos($segundoAp,"X");
}
if($contador > strpos($segundoAp,"Y") and strpos($segundoAp,"Y")){
  $contador = strpos($segundoAp,"Y");
}
if($contador > strpos($segundoAp,"Z") and strpos($segundoAp,"Z")){
  $contador = strpos($segundoAp,"Z");
}

$curp .= substr($segundoAp,$contador,1);

$contador = strlen($nombre);
if($contador > strpos($nombre,"B") and strpos($nombre,"B")){
  $contador = strpos($nombre,"B");
}
if($contador > strpos($nombre,"C") and strpos($nombre,"C")){
  $contador = strpos($nombre,"C");
}
if($contador > strpos($nombre,"D") and strpos($nombre,"D")){
  $contador = strpos($nombre,"D");
}
if($contador > strpos($nombre,"F") and strpos($nombre,"F")){
  $contador = strpos($nombre,"F");
}
if($contador > strpos($nombre,"G") and strpos($nombre,"G")){
  $contador = strpos($nombre,"G");
}
if($contador > strpos($nombre,"H") and strpos($nombre,"H")){
  $contador = strpos($nombre,"H");
}
if($contador > strpos($nombre,"J") and strpos($nombre,"J")){
  $contador = strpos($nombre,"J");
}
if($contador > strpos($nombre,"K") and strpos($nombre,"K")){
  $contador = strpos($nombre,"K");
}
if($contador > strpos($nombre,"L") and strpos($nombre,"L")){
  $contador = strpos($nombre,"L");
}
if($contador > strpos($nombre,"M") and strpos($nombre,"M")){
  $contador = strpos($nombre,"M");
}
if($contador > strpos($nombre,"N") and strpos($nombre,"N")){
  $contador = strpos($nombre,"N");
}
if($contador > strpos($nombre,"Ñ") and strpos($nombre,"Ñ")){
  $contador = strpos($nombre,"Ñ");
}
if($contador > strpos($nombre,"P") and strpos($nombre,"P")){
  $contador = strpos($nombre,"P");
}
if($contador > strpos($nombre,"Q") and strpos($nombre,"Q")){
  $contador = strpos($nombre,"Q");
}
if($contador > strpos($nombre,"R") and strpos($nombre,"R")){
  $contador = strpos($nombre,"R");
}
if($contador > strpos($nombre,"S") and strpos($nombre,"S")){
  $contador = strpos($nombre,"S");
}
if($contador > strpos($nombre,"T") and strpos($nombre,"T")){
  $contador = strpos($nombre,"T");
}
if($contador > strpos($nombre,"V") and strpos($nombre,"V")){
  $contador = strpos($nombre,"V");
}
if($contador > strpos($nombre,"W") and strpos($nombre,"W")){
  $contador = strpos($nombre,"W");
}
if($contador > strpos($nombre,"X") and strpos($nombre,"X")){
  $contador = strpos($nombre,"X");
}
if($contador > strpos($nombre,"Y") and strpos($nombre,"Y")){
  $contador = strpos($nombre,"Y");
}
if($contador > strpos($nombre,"Z") and strpos($nombre,"Z")){
  $contador = strpos($nombre,"Z");
}

$curp .= substr($nombre,$contador,1);

echo $curp;

 ?>
