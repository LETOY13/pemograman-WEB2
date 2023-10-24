<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modul 1 - Latihan 1</title>
</head>

	<style>
		.kotak {

		}
		.clear {

		}
	</style>
	<body>
		<table border="2" cellpadding="5" cellspacing="2">
        <tr>
            <th>1</th>
            <th>1</th> <th>2</th>
            <th>Kolom 3</th>
            <th>Kolom 4</th>
            <th>Kolom 5</th>
</tr>
      
<?php
$rows = 5;
$cols = 5;

echo "<tr>";
echo "</tr>";
for ($i = 1; $i <= $rows; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $cols; $j++) {
        echo "<td>Baris $i, Kolom $j</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</table>

</body>
</html>