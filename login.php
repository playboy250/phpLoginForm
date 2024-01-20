<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="login.php" method="POST">
        <input type="text" name="username"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit"name="submit" value="login">
        </form>
</body>
</html>
<?php
if(isset($_POST['submit'])){

    $username=$_POST['username'];
    $password=$_POST['password'];
}
$login= mysqli_query ($conn,"SELECT * FROM demo WHERE username='".$username."' AND password='".$password."' LIMIT 1");

if(mysqli_num_rows($login)==1){
 echo "<script>alert('login succefully')</script>";
}

?>
