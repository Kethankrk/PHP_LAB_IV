<html>
<body>
<?php
$code = $_POST['code'];
$name = $_POST['name'];
$price = $_POST['price'];
$con = pg_connect("host=localhost dbname=college user=postgres password=ihrd2020") or die("Cannot connect");

$sql = "INSERT INTO product VALUES('$code', '$name', '$price')";
$res = pg_query($con, $sql);
echo $res ? "New record created successfully" : "Cannot insert: " . pg_last_error();

$result = pg_query($con, "SELECT * FROM product");
if (!$result) die("Query failed: " . pg_last_error());

echo "<h2>INVENTORY DETAILS</h2><table border='2'><tr><th>Item Code</th><th>Item Name</th><th>Unit Price</th></tr>";
while ($row = pg_fetch_row($result)) {
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}
?>
<form><input type="button" value="Insert again" onclick="location.href='p8.html'"></form>
</body>
</html>
