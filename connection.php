<?php
$con = mysql_connect('127.0.0.1', 'root', '');
$db = mysql_select_db('myportal', $con);
if (!$con) {
    die('Could not connect: ' . mysql_error());
}
?>