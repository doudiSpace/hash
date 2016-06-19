<?php


// ******************* model *******************************
require_once('fonctions.php');

// ******************* controleur *******************************
$reponse = '';
$aideCode ='';

$hash = '$2y$10$qiXgy9c67CfT.rtOc5eycev9AwSDDp8VPKwMaH14E9kOojtDmJqd6';

if($_SERVER['REQUEST_METHOD']==='POST' && isset($_POST['pass'])){
  $pass = htmlspecialchars($_POST['pass']);

// ***************** pour créer le hash

  $reponse = password_hash($pass,PASSWORD_DEFAULT);

  // ***************** pour vérifier le hash

  // $reponse = 'c est faux';
  //
  // if(password_verify($pass,$hash)){
  //   $reponse = 'c est bon';
  //
  // }
}


// ******************* vue *******************************
require_once('vue/index.phtml');
