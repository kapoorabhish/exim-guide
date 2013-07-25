<?php
$itc= $_POST ["code"];
$count=strlen(((string)$itc));
mysql_connect("Host","Useranme","Password");
@mysql_select_db("DataBase_Name") or die("unable to select database");
?>
