<html>
<body>
<?php
include("connection.php");
$nam=$_POST["nam"];
$petname=$_POST["petname"];
$breed=$_POST["breed"];
$age=$_POST["age"];
$price=$_POST["price"];
$gpay=$_POST["gpay"];
$abt=$_POST["about"];
$sts="unpaid";
$sql = "INSERT INTO
Sell(seller_name,petname,breed,age,price,gpay,about,sts)VALUES('$nam','$petname','$breed','$age'
,'$price','$gpay','$abt','$sts')";
if($mysqli->query($sql) === TRUE) {
echo '<script>alert(" Selled successfully")</script>';
} else {
echo "<table>";
echo "Error: " . $sql . "<br>" . $mysqli->error;
}
$mysqli->close();
?>
</body>
</html>