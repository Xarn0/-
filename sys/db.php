<?php
session_start();
try {
    $dbh = new PDO('mysql:host=localhost;dbname=game', 'root', 'root');
  } catch (PDOException $e) {
    print "Ошибка: " . $e->getMessage();
    die();}
$id_user = $_SESSION['id_user']; // заглушка под сессию

    $data = $dbh->prepare('SELECT COUNT(*) FROM `user` WHERE `id` = :id_user LIMIT 1');
$data->execute([
  ':id_user' => $id_user
]);
$result = $data->fetchColumn();

if(isset($result) && $id_user){ // Проверка на сессию и то что такой человек один
  $data = $dbh->prepare('SELECT * FROM `user` WHERE `id` = :id_user LIMIT 1');
$data->execute([
  ':id_user' => $id_user
]);
$res = $data->fetch(PDO::FETCH_ASSOC);
}

?>