<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = 'miguel';
$dbname = 'sample';
$dbpwd = 'miguel';
//$dbuser = getenv("miguel");
//$dbname = getenv("sample");
//$dbpwd = getenv("miguel");
 


$connection = mysqli_connect($dbhost.":".$dbport, $dbuser, $dbpwd, $dbname) or die("Error " . mysqli_error($connection));


$query = "SELECT * from users" or die("Error in the consult.." . mysqli_error($connection));

echo "Here is the list of users: <br>";
$rs = $connection->query($query);
while ($row = mysqli_fetch_assoc($rs)) {
    echo $row['user_id'] . " " . $row['username'] . "<br>";
}
echo "End of the list <br>";

mysqli_close($connection);

?>
