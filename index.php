<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Show all rows from Postgres Database";

//refere to database
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));
//you sql query
$sql = "SELECT Name, Price FROM Products";
$stmt = $pdo -> prepare ($sql);
//execure  the query on the server and return the result
$stmt -> setFetchMode(PDO::PETCH_ASSOC);
$stmt -> execure();
$resultSet = $stmt -> fetchAll();
//display the data
?>
<ul>
<?php
foreach ($resultSet as $row) {
	echo "<li>".
	$row["Name"].'--'.$row["Price"]."</li>";
}
?>
</ul>
// echo "Hello World! teacher";
</body>
</html>