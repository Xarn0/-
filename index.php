<?php
ob_start();
date_default_timezone_set('Europe/Moscow');
$time=time();
include_once 'sys/db.php'; // Подключение к базе

$set['title']='Заголовок';

// include_once 'sys/functions.php';

include_once 'inc/head.php';

if(isset($res))
{
include_once 'shop.php';
}
if(!isset($res))
{
include_once 'views/welcom.php';
}

// include_once 'inc/uhead.php';
