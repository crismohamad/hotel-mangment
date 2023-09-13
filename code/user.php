<?php include 'header.php';?>
<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $FirstName = mysqli_real_escape_string($connection, $_POST['FirstName']);
 $LastName= mysqli_real_escape_string($connection, $_POST['LastName']);
 $Typee=mysqli_real_escape_string($connection, $_POST['Typee']);
 $Age=mysqli_real_escape_string($connection, $_POST['Age']);

 $Email=mysqli_real_escape_string($connection, $_POST['Email']);

 $PhoneNum=mysqli_real_escape_string($connection, $_POST['PhoneNum']);
 $password = md5($_POST['password']);
 

 $sql = "INSERT INTO `1` (FirstName, LastName,Typee,Age,Email,PhoneNum, password) VALUES ('$FirstName','$LastName','$Typee','$Age', '$Email','$PhoneNum' ,'$password')";
 $result = mysqli_query($connection, $sql);
 if($result){
        $smsg = "User Registration successfull ";
        echo "
         <meta HTTP-EQUIV content='0; url='rooms-tariff.php'>";
                                        
echo"welcome  <br>
 $FirstName";
echo"<a href='rooms-tariff.php'>rooms-tariff</a>";

 }else{
  $fmsg = "User registration failed";
 }
}


?>
 <div class="mt-4 p-5 bg-secondary text-white rounded">
  
<h2>Register informantion</h2>


<body>
<div class=" container col-md">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <div class="input-group">
       
            <input type="text"  name="FirstName" id="inputFirstName" class="form-control"  placeholder="FirstName" required>
        
        
        <input type="varchar"name="LastName" id="inputLastName" class="form-control"  placeholder="LastName"required>
        
       
        <input type="Number"name="Age" id="inputAge" class="form-control"  placeholder="Age"required>
        
   
            <input type="varchar" name="Email" id="inputEmail" class="form-control"  placeholder="Email"required autofocus>
        
       
            <input type="varchar"name="PhoneNum" id="inputPhoneNum" class="form-control"  placeholder="PhoneNum"required>
          
            <input type="varchar"name="Typee" id="inputPhoneNum" class="form-control"  placeholder="Typee"required>
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
        <button class="btn btn-default" >
        Submit</button>
     
<?php include 'footer.php';?>