<?php
$host='localhost';
$user='root';
$pass=''; //---- Password root ----
$db='perpus'; // ------ Nama database --
$ok=mysql_connect($host,$user,$pass) or die ('gagal konek'.mysql_error());
mysql_select_db($db,$ok);
?>