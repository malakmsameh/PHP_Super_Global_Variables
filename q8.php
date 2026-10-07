<?php

$visitors = 0;

if (!isset($_SESSION['has_visited']))
{
	$_SESSION['has_visited'] = true;
	$visitors++;
}

echo "Total Visitors: " . $visitors;
?>