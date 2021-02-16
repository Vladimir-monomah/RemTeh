<?php

//if you got any deprecated error in above php 5.5 version just uncomment below line to hide those warnings
// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
error_reporting(0);
date_default_timezone_set('Europe/Moscow');
$con = mysqli_connect("localhost", "mysql", "mysql", "handyman") or die("Ошибка " . mysqli_error($connection));