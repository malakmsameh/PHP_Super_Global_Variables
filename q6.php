<?php

echo $_SERVER['REQUEST_TIME'];
echo "<br>";
echo date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
echo "<br>";
echo date('i:s', $_SERVER['REQUEST_TIME']);

?>