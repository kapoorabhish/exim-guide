<?php
mysql_connect("phpmyadmin","root","12345");
@mysql_select_db("test") or die("unable to select database");
$query=mysql_query("select  itc ,hs5  from final2");
while($row=mysql_fetch_array($query))
{
$field1=(int)($row['itc']/1000);
$field2=$row['hs5'];
mysql_query("insert into hs5 values('$field1','$field2')");
echo $field1;
echo "<br>";
echo $field2;
echo "<br>";
}
?>

