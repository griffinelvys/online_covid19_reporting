
<?php
  include ("connection.php");
 session_start();
   if (isset($_POST['password']) && isset($_POST['user_name'])){
    if (isset($_POST['password'])){
     $user_name = stripslashes($_REQUEST['user_name']);
    $user_name = mysqli_real_escape_string($con,$user_name);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
   $query = "SELECT * FROM user WHERE user_name='$user_name'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
        if($rows==1){
$query = "SELECT * FROM user WHERE  user_name='$user_name' AND password='$password'";
    $result = mysqli_query($con,$query) or die(mysqli_error());
    $rows = mysqli_num_rows($result);
if($rows==1){
   $query = "UPDATE user SET lastlogin=now() WHERE user_name='$user_name'";
   $result = mysqli_query($con,$query);
     $_SESSION['user_name'] = $user_name;
    Print '<script>window.location.assign("index.php");</script>';

 }else{
    $fmsg ="Login failed! Wrong password. ";

 }
  }else
       {
         $fmsg ="Login failed! email number does not exist.";
        }

       
    }
    else
    {
        $smsg ="<b>Customer authentication window.</b>";
    }}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smartex ecommerce shop</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <style type="text/css">
      body{
        background-color: black;
      }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                   <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div>
<?php } ?>  <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<form action="" method="post">
                        <fieldset>
                            <div class="form-group">
               <input class="form-control" placeholder="User Name" name="user_name" type="user_name" required>
                            </div>
                            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" required>
                            </div>
                           
                             <input type="submit" value="Login" class="btn btn-success"></fieldset>
                             <a href="signup.php">Click to SignUp</a><br><br>
                    </form>
        </div><!-- /.col-->
    </div><!-- /.row -->    
    

<script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
