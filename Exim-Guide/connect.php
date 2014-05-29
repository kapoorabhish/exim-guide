<?php
$itc= $_POST ["code"];
$count=strlen(((string)$itc));
mysql_connect("localhost","username","password");
@mysql_select_db("dbname") or die("unable to select database");
?>
