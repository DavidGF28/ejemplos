<?php

$numero1= 0;
$numero2= 0;
$numero3= 0;

$numero1=$_REQUEST['uno'];
$numero2=$_REQUEST['dos'];
$numero3=$_REQUEST['tres'];

if($numero1>$numero2)
{
    if($numero1>$numero3)
    {$mayor=$numero1;}
    else
    {$mayor=$numero3;}
}
else 
{
    if($numero2>$numero3)
    {$mayor=$numero2;}
    else
    {$mayor=$numero3;}
}

echo "el numero mayor es $mayor";
