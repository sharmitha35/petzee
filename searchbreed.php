<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<html>
<head>
<style>
table {
border-collapse: collapse;
width: 70%;
}
th, td {
padding: 8px;
text-align: left;
border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body class="container-fluid">
<center>
<?php
include("connection.php");
$breed=$_POST["breed"];
if(isset($_POST['breed']))
{
$sql="SELECT *FROM Sell WHERE breed='$breed'";
$result=$mysqli->query($sql);
if($result->num_rows==0)
{
echo "Sorry! No pet found with that name. Try searching again.";
}
else
{
echo "Pet Details";
echo "<table >
<br><br><br><br>
<tr>
<th>Id</th>
<th>Name</th>
<th>petName</th>
<th>Breedtype</th>
<th>Price</th>
<th>Age</th>
<th>Gpay</th>
<th>About</th>

<th>Sts</th>
</tr>";
while ($rows=$result->fetch_assoc()){
echo "<tr>";
echo "<td>" . $rows['seller_id'] . "</td>";
echo "<td>" . $rows['seller_name'] . "</td>";
echo "<td>" . $rows['petname'] . "</td>";
echo "<td>" . $rows['breed'] . "</td>";
echo "<td>" . $rows['price'] . "</td>";
echo "<td>" . $rows['age'] . "</td>";
echo "<td>" . $rows['gpay'] . "</td>";
echo "<td>" . $rows['about'] . "</td>";
echo "<td>" . $rows['sts'] . "</td>";
echo "</tr>";
}
echo "</table>";
}
}
else{
echo "<table>";
echo "error: ". $sql . "<br>" .$mysqli->error;
}
$mysqli->close();
?>
</center>
</body>
</html>