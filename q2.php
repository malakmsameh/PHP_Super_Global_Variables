<?php

echo "<br>";
echo "<form method='post'>";
echo "<lable>URL: </lable>";
echo "<input type='url' name='URL'>";
echo "<button type='submit'>go</button>";
echo "</form>";


$URL = $_POST["URL"];

header("Location: " . $URL); 
exit();

// echo "$URL";

?>