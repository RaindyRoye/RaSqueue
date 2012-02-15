<?php
include("squirrel.class.php");
$smq = new Squirrel('127.0.0.1', 6061);
$smq->push_tail("INSERT INTO mytable(uid, username, password)VALUES(NULL, 'liexusong', '123456');");
?>
