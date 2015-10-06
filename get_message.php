<?php
$db = new mysqli("localhost", "root", "", "awd-msg");

if ($db->connect_error) {
	die("Sorry, there was a problem connecting to our database.");
}




$result = $db->prepare("SELECT * FROM messages");
$result->execute();

$result = $result->get_result();

//echo "<prev>";
while($r = $result->fetch_row()) {
	echo $r[1]."\\".$r[2]."\n";
}
?>
