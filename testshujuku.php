
<?php
 //ini_set("error_reporting","E_ALL & ~E_NOTICE");

include('mysql.php');

$sql = "select *  from  `webs`";
$rel =  $dbh-> prepare($sql);
$rel->execute();
$message = $rel->fecthAll(PDO::FETCH_ASSOC);
var_dump($message);
$name=$_POST('webname');
$adress=$_POST('webadress');
$sql= "insert comment (webname,webadress) value ('$name','$adress')";
$dbh=exec($sql);
?>