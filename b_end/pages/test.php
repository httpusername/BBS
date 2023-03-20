<?php
include_once '../config.php';
include_once '../util/util.php';
$link=connect();
$query = "select * from sfk_father_module";
$result = execute($link,$query);
var_dump((mysqli_fetch_array($result)));

