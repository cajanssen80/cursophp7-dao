<?php

echo "Estou em index.php"."<br>";

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

// Carrega unico usuario
//$user = new Usuario();
//$user->loadById(1);
//echo $user;

// Carrega uma Lista de Usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega um usuario usando o login e senha
$usuario = new Usuario();
$usuario->login("camila","camila");
echo $usuario;

?>