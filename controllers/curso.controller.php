<?php

//Incorporar al modelo
require_once "../models/curso.php";

//Verificar si existe una operación en curso
//GET - POST - REQUEST
if (isset($_POST['operacion'])){

  //Instancia de la clase curso
  $curso = new Curso();

  //Identificar la operación: listar, insertar, eliminar, buscar, etc.
  if ($_POST['operacion'] == 'listar'){

    //Utilizaremos el método definido en la clase
    $resultado = $curso->listarCursos();

    sleep(3);

    //Enviamos el resultado a la vista como un JSON
    echo json_encode($resultado);
  }

  if ($_POST['operacion'] == 'buscarID'){
    
  }

}
