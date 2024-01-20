<?php
include ("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="f.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<body>

   <div class="one">
   <center>
        <h1>signup</h1>
    </center>
        
   <form action="signup.php" method="POST">
        <input type="text" name="username"><br><br>
        <input type="password" name="password"><br><br>
        <input type="submit"name="submit" value="signup">
        
        </form>
   </div>
   
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$query="INSERT INTO `demo`(`username`, `password`) VALUES ('$username','$password')";
$result= mysqli_query($conn,$query);
if(!$result){
    die('Failed.mysqli_error()');
}
else{

 echo "<script>alert('signed up succefully')</script>";
   
}
?>
