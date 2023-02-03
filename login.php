<?php
$is_invalid = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$mysqli = require __DIR__ . "/connection.php";
$sql = sprintf("SELECT * FROM user WHERE email = '%s'",
$mysqli->real_escape_string($_POST["email"]));

$result = $mysqli->query($sql);
$user = $result->fetch_assoc();
if ($user) {
if (password_verify($_POST["password"], $user["password_hash"])) {
session_start();
session_regenerate_id();
$_SESSION["user_id"] = $user["id"];
header("Location: index1.php");
exit;
}
}
$is_invalid = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="navbar.css">
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    body{
        background-color:black;
        color: rgb(248, 248, 108);
    }
    .form-input {
 width:20%;
 margin-bottom: 10px;
 font-size: 0.85em;
 font-weight: 40;
 border-radius: 0px !important;
 padding: 10px 20px;}
 input, textarea, button, button:focus {
 outline: none;
 box-shadow:none !important;
 color:rgb(248, 248, 108);
 background-color: black;
 }
 input, textarea {
    width: calc(100% - 18px);
    padding: 8px;
    margin-bottom: 20px;
    border: 1px solid yellow;
    outline: none;
    color: black;
    border-radius: 10px;
    background-color:rgb(255, 255, 255);
    }
</style>
</head>
<body>
    <center>
<div>
<div class="container blue circleBehind" style="width:100%;">
<a href="#">HOME</a>
<!-- <a href="http://localhost/petzee/searchbreed.html">SEARCH PETS</a>
<a href="http://localhost/petzee/buy.html">BUY PETS</a>
<a href="http://localhost/petzee/sell.html">SELL PETS</a>
<a href="http://localhost/petzee/doctor.html">PET CARE</a> -->
<a href="http://localhost/petzee/index.php">LOGIN</a>
</div>
</div>

<?php if ($is_invalid): ?>
<em>Invalid login</em>
<?php endif; ?>

<form method="post" id="main">
<!-- <h2>Login to your account</h2>
<div class="input-parent">
<label for="username"> Email</label>
<input type="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "")
?>"id="email" required>
</div>
<div class="input-parent">
<label for="password">Password</label>
<input type="password" id="password" name="password" required>
</div>
<button type="submit">Login</button> -->
<div class="form-group">
<label for="username"> Email</label>
<input type="email" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "")
?>"id="email" required placeholder="email" class="form-control form-input">
        </div>
   
        <div class="form-group">
        <label for="password">Password</label>
<input type="password" id="password" name="password" required placeholder="email" class="form-control form-input">
        </div>
        
        <button>Login</button>
</form>
</center>
</body>
</html>