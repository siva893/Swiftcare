<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>id</th>
<th>name</th>
<th>email</th>
<th>number</th>
<th>date</th>
</tr>
<?php
define('DB_USER', 'id20645669_root');
define('DB_PASSWORD', 'Webhost@2023');
define('DB_HOST', 'localhost');
define('DB_NAME', 'id20645669_hms');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die('connection failed' . mysqli_connect_error());

mysqli_set_charset($conn, 'utf8');

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];

    $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

    if ($insert) {
        $message[] = 'appointment made successfully!';
    } else {
        $message[] = 'appointment failed';
    }
}

$sql = "SELECT * FROM `contact_form`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["number"] . "</td><td>" . $row["date"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
