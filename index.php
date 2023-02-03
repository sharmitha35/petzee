<?php
session_start();
if (isset($_SESSION["user_id"])) {
$mysqli = require __DIR__ . "/connection.php";
$sql = "SELECT * FROM user WHERE id = {$_SESSION["user_id"]}";
$result = $mysqli->query($sql);

$user = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Login Page</title>
<style>
body{
background-color: #13000c;
}
h1{
justify-content: center;
margin-left: 45%;
color:rgb(248, 248, 108);
}
#dem{
justify-content: center;
margin-left: 45%;
color:rgb(248, 248, 108);
}
a{
color:rgb(248, 248, 108);
}
</style>
</head>
<body>
<div class="container blue circleBehind" style="width:100%;>
<a href="#">HOME</a>
<!-- <a href="http://localhost/petzee/searchbreed.html">SEARCH PETS</a>
<a href="http://localhost/petzee/buy.html">BUY PETS</a>
<a href="http://localhost/petzee/sell.html">SELL PETS</a>
<a href="http://localhost/petzee/doctor.html">PET CARE</a> -->
<a href="http://localhost/petzee/index.php">LOGIN</a>
</div>
<h1>Home</h1>

<?php if (isset($user)): ?>
<p>Hello <?= htmlspecialchars($user["name"]) ?></p>
<body class="container-fluid">
<p><a href="logout.php">Log out</a></p>
<?php else: ?>
<p id="dem"><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
<?php endif; ?>

</body>
</html>