<html>
<! siteground.com/tutorials/php-mysql/execute_server_commands.htm>
<body>
<?php

$item=$_POST ["goods"];
$search_term_esc = AddSlashes($item);

mysql_connect("phpmyadmin","root","12345");
@mysql_select_db("test") or die("unable to select database");
$sql = "SELECT * FROM final2 WHERE Description LIKE '%$search_term_esc%'";
$result=mysql_query($sql);
$num=mysql_numrows($result);
$i=0;
echo "<table border='3' bgcolor='yellow'>";
echo"<th>ITC(HS)</th>";
echo"<th>Item Description</th>";
echo"<th>hs(4)</th>";
echo"<th>hs(5)</th>";
echo"<th>hs(6)</th>";
echo"<th>hs(8)</th>";
echo"<th>Policy</th>";
echo"<th>Condition</th>";
while ($i<$num) {
$field1=mysql_result($result,$i,"itc");
$field2=mysql_result($result,$i,"description");
$field3=mysql_result($result,$i,"hs4");
$field4=mysql_result($result,$i,"hs5");
$field5=mysql_result($result,$i,"hs6");
$field6=mysql_result($result,$i,"hs8");
$field7=mysql_result($result,$i,"policy");
$field8=mysql_result($result,$i,"conditions");
echo "<tr>";
echo "<td>".$field1."</td>";
echo "<td>".$field2."</td>";
echo "<td>".$field3."</td>";
echo "<td>".$field4."</td>";
echo "<td>".$field5."</td>";
echo "<td>".$field6."</td>";
echo "<td>".$field7."</td>";
echo "<td>".$field8."</td>";
echo "</tr>";

//echo $field1;
//echo " ";
//echo $field2;
//echo "<br>";


$i++;
}


?>
</body>
</html>
