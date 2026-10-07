<?php

session_start();

if (!isset($_SESSION['ref_counter']))
{
	$_SESSION['ref_counter'] = 0;
}

// $_SESSION['ref_counter'] = 0;

$_SESSION['ref_counter']++;

echo "this is how many times you refreshed the page : ". $_SESSION['ref_counter'];

?>