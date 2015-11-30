<?php
$people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

echo "<!doctype html>";
echo "<html>";
echo "<head>";
echo "<title>DMS Benchmark</title>";
echo "</head>";
echo "<body>";

echo "<table  cellpadding='10'>";

echo "<thead>";
echo "<tr>";
$aKeys = array_keys($people[0]);
foreach ($aKeys as $k => $v) {
	echo "<th>";
	echo $v;
	echo "</th>";
}
echo "</tr>";
echo "</thead>";

echo "<tbody>";

foreach ($people as $k => $p) {
	echo "<tr>";
	foreach ($p as $kk => $v) {
		echo "<td>";
		echo $v;
		echo "</td>";
	}
	echo "<td><button onclick='alert(\"". $p['first_name'] . " " . $p['last_name'] . " - " . $p['email'] ."\")'>Say my Name</button></td>";
	echo "</tr>";
}
	
echo "</tbody>";

echo "</table>";

echo "</body>";
echo "</html>";
?>
