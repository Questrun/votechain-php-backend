<?php
$host='';
$user='';
$pass='';
$db='';
$conn=mysql_connect($host,$user,$pass,$db);
if(!$conn){
	die('Unable to connect to mysql db');
}
global $conn;
$sql['fetch']=function(){
	
};
$sql['insert']=function(){};
$sql['create']=function(){};
$sql['delete']=function(){};
$sql['drop']=function(){};
$sql['inc']=function(){};
$sql['update']=function(){};

global $sql;


?>
