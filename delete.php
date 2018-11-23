
<?php
extract($_REQUEST);
include('connect.php');

$sql=mysql_query("select * from users where id='$del'");
$row=mysql_fetch_array($sql);

//unlink("files/$row[name]");

mysql_query("delete from users where id='$del'");

header("Location:message.php");

?>