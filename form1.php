<?php
require_once("inserting1.php");
if(isset($_POST["submit"])){
    if(!empty($_POST["name"])){
        $name=$_POST["name"];
        $mobile=$_POST["mobile"];
        $sql="INSERT INTO gawar(manoj, mobileno) VALUES('dsfsd', 1235)";
    }else{
        echo"please enter a crect data";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="name">Name</label>
    <input type="name"name="name"/>
    <br>
    <label for="mobileno">MobNO</label>
    <input type="number"name="mobile"/>
    <br>
    <button type="submit" name="submit">Submit</button>
    <br>
    </form>
</body>
</html>