<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "group7";
 $dbpass = "KVSzuH";
 $db = "group7";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }

function OpenReadCon()
 {
 $dbhost = "localhost";
 $dbuser = "group7read_only";
 $dbpass = "KVSzuH";
 $db = "group7";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
 
$central = 'https://clabsql.clamv.jacobs-university.de/~akaleci/html/maintenance.php';
$insert = 'https://clabsql.clamv.jacobs-university.de/~akaleci/html/insert_page.php';
   
?>