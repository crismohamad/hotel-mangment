
<?php include 'header.php';?>


<br>

<br>

<br>

<br>
<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $Email = mysqli_real_escape_string($connection, $_POST['Email']);
 $password = md5($_POST['password']);

 $sql = "SELECT * FROM `client` WHERE Email='$Email' AND password='$password'";
 $result = mysqli_query($connection, $sql);
 $count = mysqli_num_rows($result);
 if($count == 1){
        echo"welcome $Email";
        echo"<a href='rooms-tariff.php'>rooms-tariff</a>";
 }else{

  $fmsg = "<div class='fmsg fmg'>it,s can not log in</div>";

  
 }
}
if(isset($_SESSION['Email'])){
 $smsg = "<div class='smsg'> log in</div>";


 
echo"<h2 >Welcome</h2> $Email";

echo"<a href='rooms-tariff.php'>rooms-tariff</a>";
echo"<a href='logout.php'>log out</a>";


 } else {


    echo  "You are not logged in...Enter your data to log in" ;
}
?>


 <div class="container col-md">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <div class="container col-md">
        <h1 class="form-signin-heading">Log In </h1>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
    <input type="varchar" name="Email" class="form-control" placeholder="Email" required>
  

  <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">log in</button>
        
      </form>
</div>

</div>


















<!-- 
<div class="container>
<h1>Log In </h1>
<form role="form" class="wowload fadeInRight">
        <div class="container col-md">
            <input type="text" class="form-control"  placeholder="username">
        </div>
        
<br>

<br>

<br>

        <div class="container col-md">
        <input type="text" class="form-control"  placeholder="password">
        </div>

        <div class="form-check md">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  
    <div class="form-check mb">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember">forget password? 
    </label>
  
</div> -->

<br>

<br>

<br>

<br>
        
</div>
        <?php include 'footer.php';?>