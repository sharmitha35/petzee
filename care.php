<html>
<body>
<?php
include("connection.php");
$name=$_POST["name"];
$petname=$_POST["petname"];
$breed=$_POST["breed"];
$age=$_POST["age"];
$hosp=$_POST["hosp"];
$datee=$_POST["datee"];
$timee=$_POST["timee"];
$sts="Appointment fixed";
$sql = "INSERT INTO
Appointment(customer_name,petname,breed,age,hospital_name,date,time)VALUES('$name','$petn
ame','$breed','$age','$hosp','$datee','$timee')";
$sql1 = "UPDATE Hospital SET appointment='$sts' WHERE hospital_name='$hosp'";
if($mysqli->query($sql) === TRUE) {
echo '<script>alert(" Appointment fixed successfully")</script>';
} else {
echo "<table>";
echo "Error: " . $sql . "<br>" . $mysqli->error;
}
if($mysqli->query($sql1) === TRUE) {
echo '<script>alert(" Appointment fixed successfully")</script>';
} else {
echo "<table>";
echo "Error: " . $sql1 . "<br>" . $mysqli->error;
}
$mysqli->close();
?>
</body>
</html>