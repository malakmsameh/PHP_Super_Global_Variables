<?php

$dir_path = dirname($_SERVER['PHP_SELF']);
echo "Project Name: " . $dir_path . "<br>";


$script_name = basename($_SERVER['PHP_SELF']);
echo "Script Name: " . $script_name;

?>