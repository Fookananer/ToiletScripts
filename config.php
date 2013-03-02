<?php
$dbuser = 'root';
$dbpass = '';
$dbserver = 'localhost';
$db = 'test';

mysql_connect($dbserver, $dbuser, $dbpass) or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db($db) or die(mysql_error());
//echo "Connected to Database";
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
