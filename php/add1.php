<?php
include("squirrel.class.php");
$smq = new Squirrel('127.0.0.1', 6061);
$smq->push_tail("www.thislinux.com");
?>
