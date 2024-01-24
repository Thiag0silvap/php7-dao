<?php 

require_once("config.php");
//Carrega um usuario
//$root = new Usuario();
//$root->loadById(3);
//echo $root;


// Carrega uma lista de Usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("ro");
// echo json_encode($search);

//Carrega um usuario usando login e a senha
// $usuario = new Usuario();
// $usuario->login("root", "!@#$");
// echo $usuario; 

 //Criando um novo usuario
 // $aluno = new Usuario("aluno", "@aluno");
 //$aluno->insert();
 // echo $aluno;


 // Alterar um usuario  
 // $usuario = new Usuario();
 // $usuario->loadById(1);
 // $usuario->update("professor", "!@#$");
 // echo $usuario;

 // Deleta um usuario

 $usuario = new Usuario();
 $usuario->loadById(3);
 $usuario->delete();
 echo $usuario;
 ?>