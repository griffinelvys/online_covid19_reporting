<?php

   include("connection.php");
   include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //something was posted
    $user_name = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        // save to database
        $user_id = random_num(20);
        $query = "insert into user (user_id, user_name, password, name) values('$user_id', '$user_name', '$password',
        '$name')";
        
        if(mysqli_query($con, $query)){
            echo '<script>alert("Successfully Registered")</script>';
            header("location: login.php");
            die;
        }

        
    }else
    {
        echo "Please enter some valid information!";
        
    }
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
    
</head>   
<body>
	<style type="text/css">
        #text{
             height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
        } 
    
        
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            
            background-color: lightblue;
            border: none;
        }
        
        #box{
            
            background-color: grey;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin: 10px;colour: white;">Signup</div>
        <input id="text" type="text" name="username" placeholder="User Name"><br><br>
        <input id="text"  type="password" name="password" placeholder="Password"><br><br>
        <input id="text" type="text" name="name" placeholder="Full Name"><br><br>
        <input id="button" type="submit" value="Signup"><br><br>
        <a href="login.php">Click to Login</a><br><br>
        
    </form>
    
    </div>
</body>
</html>