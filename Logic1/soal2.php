<?php
$soal = "Soal 2";
include '../functions.php';
include 'tplLogic1.php';

if (isset($_POST['submit'])) {
	$r = $_POST['range'];

	echo "<table>";
	for($y=1;$y<=$r;$y++) {
		echo "<tr>";
		for($x=1;$x<=$r;$x++) {
			if ($x == $r-($y-1)) {
				echo "<td>*</td>";
			} else {
				echo "<td></td>";
			}
		}
		echo "</tr>";
	}
	echo "</table>";
	br();
	include 'footer.php';
}
