<?php

//Array (arreglo)/colección más sencillo. Posee un índice, el primero es 0
$platos = ["Ceviche", "Arroz con pollo", "Carapulcra", "Ají Gallina", "Lomo saltado"]
echo $platos[0];  //Primero

$amigos = array("José", "Joel", "Lorenzo", "César");
echo $amigos[1];  //Segundo

//Array MULTI dimensional (matriz)
$aplicaciones = [
  ["Photoshop", "Corel Draw", "Premier", "Muse"],
  ["VSCode", "Xampp", "NetBeans", "Erwin", "Notepad++"],
  ["Excel", "SAP", "AutoCAD", "PowerBI", "Project"]
];

//Obtener VSCode
echo $aplicaciones[1][0]; //1 = índice arreglo, 0 = índice valor

//Obtener Muse
echo $aplicaciones[0][3];

//Obtener SAP
echo $aplicaciones[2][1];

//Hasta aquí, cualquier de los arreglos anteriores, utiliza un ÍNDICE (int)
//ARREGLOS ASOCIATIVOS... KEY => VALUE
$datosPersonales = [
  "apellidos"   => "FRANCIA MINAYA",
  "nombres"     => "Jhon Edward",
  "especialidad"=> "Ingeniería de Software con IA",
  "email"       => "jfrancia@senati.pe",
  "edad"        => 38,
  "estaCasado"  => true,
  "peliculas"   => ["EndGame", "Pinocho", "IronMan"]
];

//Obtener la especialidad
echo $datosPersonales["especialidad"];

//Obtener la primera de tus películas favoritas
echo $datosPersonales["peliculas"][0]