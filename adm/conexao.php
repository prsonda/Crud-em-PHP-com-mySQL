<?php

try {

  $host = "localhost";
  $user = "root";
  $password = "prs.1357";
  $database = "novaescola";

  $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // echo "Conexão bem-sucedida!";
} catch (PDOException $e) {

  echo "Falha na conexão: " . $e->getMessage();
}
