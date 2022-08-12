<?php

$db_user = "epiz_31787943";
$db_pass = "TR19dW1g3Qlw";
$db_name = "epiz_31787943_XXX";

$db = new PDO('mysql:host=sql102.epizy.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);