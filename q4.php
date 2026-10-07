<?php

$todos = [];

if (isset($_POST['existing_todos'])) {
	$todos = $_POST['existing_todos'];
}

$TO_DO = $_POST["TO_DO"] ?? "";
if ($TO_DO != "") {
	$todos[] = $TO_DO;
}

echo "<br>";
echo "<form method='post'>";
echo "<lable>TO_DO: </lable>";
echo "<input type='text' name='TO_DO'>";
echo "<button type='submit'>submit</button>";
foreach ($todos as $task) {
    echo "<input type='hidden' name='existing_todos[]' value='$task'>";
}
echo "</form>";

$TO_DO = $_POST["TO_DO"];
if ($TO_DO != "")
	{
		$todos[] = $_POST["TO_DO"];
	}

if (!empty($todos)) {
    echo "<ul>";
    foreach ($todos as $task) {
        echo "<li><input type='checkbox'> $task</li>";
    }
    echo "</ul>";
}

// if ($todos != "")
// 	{
// 		echo "<ul>";
// 		echo "<li>$todos</li>";
// 		echo "</ul>";
// 		// echo "<input type='TO_DO' name='TO_DO'">
// 	}

?>