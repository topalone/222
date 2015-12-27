<?php
$dsn="mysql:host=localhost;dbname=top";
$passwd='123456';
$username='top';
$dbh = new PDO($dsn,$username,$passwd);
$dbh -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$dbh->exec('set names utf8');


/*$rel =  $dbh-> prepare($sql);
$res-> execute();
$message = $res->fecthAll(PDO::FETCH_ASSOC);
var_dump($message);*/
?>