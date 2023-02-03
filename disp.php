<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="navbar.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
tr:nth-child(even) {background-color: black;color:yellow;}
</style>
</head>
<body >
<body class="container-fluid">
<div>
<div class="container blue circleBehind" style="width:100%;">
<a href="#">HOME</a>
<a href="http://localhost/petzee/searchbreed.html">SEARCH PETS</a>
<a href="http://localhost/petzee/buy.html">BUY PETS</a>
<a href="http://localhost/petzee/sell.html">SELL PETS</a>
<a href="http://localhost/petzee/doctor.html">PET CARE</a>
<a href="http://localhost/petzee/index.php">LOGIN</a>
</div>
</div>
<center>
<center><h1>PET DETAILS</h1></center>
<div class="justify-content-center" style="width:50%;background-color:black;color:yellow;">
<table class="table table-striped" style="width: 60%;background-color:rgb(29, 150, 172);" >
</table>
</div>
<?php
include("connection.php");
$query = "SELECT * FROM Sell";

echo '<table border="0" cellspacing="2" cellpadding="2">
<tr>
<td> <font face="Arial">sellerID</font> </td>
<td> <font face="Arial">seller name</font> </td>
<td> <font face="Arial">petname</font> </td>
<td> <font face="Arial">breed</font> </td>
<td> <font face="Arial">age</font> </td>
<td> <font face="Arial">price</font> </td>
<td> <font face="Arial">gpay</font> </td>
<td> <font face="Arial">about</font> </td>
<td> <font face="Arial">sts</font> </td>
</tr>';

if ($result = $mysqli->query($query)) {
while ($row = $result->fetch_assoc()) {
$field1name = $row["seller_id"];
$field2name = $row["seller_name"];
$field3name = $row["petname"];
$field4name = $row["breed"];
$field5name = $row["age"];
$field6name = $row["price"];
$field7name = $row["gpay"];
$field8name = $row["about"];
$field9name = $row["sts"];
echo '<tr>
<td>'.$field1name.'</td>
<td>'.$field2name.'</td>
<td>'.$field3name.'</td>
<td>'.$field4name.'</td>
<td>'.$field5name.'</td>
<td>'.$field6name.'</td>
<td>'.$field7name.'</td>
<td>'.$field8name.'</td>
<td>'.$field9name.'</td>
</tr>';
}
$result->free();
}
?>
</center>
</body>
</html>