<html>
<body>
<?php
include("connection.php");

$nam=$_POST["nam"];
$petname=$_POST["petname"];
$loc=$_POST["loc"];
$sellnum=$_POST["sellnum"];
$amt=$_POST["amt"];
$sts='Paid';
$sql = "INSERT INTO
Buy(name,petname,location,sellnum,amount)VALUES('$nam','$petname','$loc','$sellnum','$amt')";
$sql1 = "UPDATE Sell SET sts='$sts' WHERE gpay='$sellnum'";
if($mysqli->query($sql) === TRUE) {
echo '<script>alert("paid successfully")</script>';
} else {
echo "<table>";
echo "Error: " . $sql . "<br>" . $mysqli->error;
}

if($mysqli->query($sql1) === TRUE) {
echo '<script>alert("paid successfully")</script>';
} else {
echo "<table>";
echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}
$mysqli->close();
?>
</body>
</html>