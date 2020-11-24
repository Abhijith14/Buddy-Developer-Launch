<?php

include('db.php');

$sql = "SELECT * FROM stats WHERE id = 1";
$results = mysqli_query($conn, $sql);
$visitors = 0;
if (mysqli_num_rows($results)==1) {

	while ($row = $results-> fetch_assoc()) {
		$visitors = $row['VISITORS'];
	}
}

// $len = strlen($visitors);
// if ($len == 5)
// {
// 	$visitors = "0".$visitors;
// }
// else if($len == 4)
// {
// 	$visitors = "00".$visitors;
// }
// else if($len == 7)
// {
// 	$visitors = "999999";
// }

echo $visitors;

?>