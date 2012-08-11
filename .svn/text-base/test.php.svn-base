<?php
echo SAE_MYSQL_PORT;


$db_port=SAE_MYSQL_PORT;
//主库的host
$db_host=SAE_MYSQL_HOST_M;

$db_name= SAE_MYSQL_DB;
$db_user = SAE_MYSQL_USER;
$db_password = SAE_MYSQL_PASS;
$link=mysql_connect("$db_host:$db_port",$db_user,$db_password);

if($link){
    mysql_select_db($db_name,$link);
    echo ("ok");
}else{
    die("mysql connect failed.");
}

 
/*
try {
  $dbh = new PDO('mysql:dbname=SAE_MYSQL_DB;host=SAE_MYSQL_HOST_M;port=SAE_MYSQL_PORT', 'SAE_MYSQL_USER', 'SAE_MYSQL_PASS');
    echo 'Connected to database';
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
    */   
?>
