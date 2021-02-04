<?php
ob_start();
date_default_timezone_set('Europe/Moscow');
$time=time();
include_once 'sys/db.php'; // Подключение к базе

$set['title']='Заголовок';

// include_once 'sys/functions.php';

include_once 'inc/head.php'; //Структура html

if(isset($res))
{
include_once 'shop.php'; //Если человек авторизировался
}
if(!isset($res))
{
include_once 'views/welcom.php'; //Если человек не авторизировался
}

// include_once 'inc/uhead.php'; //Уведомления
