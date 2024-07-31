<?php
    $persona = [
        "nombre" => "Gonzalo",
        "apellido" => "Perez",
        "edad" => 30,
        "ciudad" => "Montevideo",
        "sexo" => "Masculino",
        
    ];

echo  " El nombre de la persona es: <b>{$persona["nombre"]}</b>,  El apellido de la persona es: <b>{$persona["apellido"]}</b>,  La edad de la persona es:  <b>{$persona["edad"]}</b>,  La ciudad de la persona es: <b>{$persona["ciudad"]}</b>,  El genero de la persona es:  <b>{$persona["sexo"]}</b>  <br>";
$persona["nombre"] = "Luca";
$persona["edad"] = 15;
$persona["ciudad"] = "San Jose";

echo  "El nombre de la persona es: <b>{$persona["nombre"]}</b>,  El apellido de la persona es: <b>{$persona["apellido"]}</b>,  La edad de la persona es:  <b>{$persona["edad"]}</b>,  La ciudad de la persona es: <b>{$persona["ciudad"]}</b>,  El genero de la persona es:  <b>{$persona["sexo"]}</b> <br>";
$persona["auto"]=false;
if($persona["auto"]==true){
echo "La persona tiene auto";
}
else{
echo "La persona no tiene auto";
}
?>