echo "<br>";
echo "<form method='post'>";
echo "<lable>number1: </lable>";
echo "<input type='text' name='nums1'>";
echo "<lable>operation: </lable>";
echo "<input type='text' name='opp'>";
echo "<lable>number3: </lable>";
echo "<input type='text' name='nums3'>";
echo "<button type='submit'>submit</button>";
echo "</form>";

$nums1=$_POST["nums1"];
$opp=$_POST["opp"];
$nums3=$_POST["nums3"];
$res = 0;
if ($opp == "+")
	{
		$res = $nums1 + $nums2;
	}
	else if ($opp == "*")
	{
		$res = $nums1 * $nums2;
	}
	else if ($opp == "/")
	{
		$res = $nums1 / $nums2;
	}
	else if ($opp == "-")
	{
		$res = $nums1 - $nums2;
	}
	echo "$res";