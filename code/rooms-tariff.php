<?php include 'header.php';?>
<?php
require_once('connect.php');
if(isset($_POST) & !empty($_POST)){
 $RoomType = mysqli_real_escape_string($connection, $_POST['RoomType']);
 $NumberOfPerson= mysqli_real_escape_string($connection, $_POST['NumberOfPerson']);
 $NumberOfRoom=mysqli_real_escape_string($connection, $_POST['NumberOfRoom']);
 $Date=mysqli_real_escape_string($connection, $_POST['Date']);

 $Month=mysqli_real_escape_string($connection, $_POST['Month']);

 $year=mysqli_real_escape_string($connection, $_POST['year']);
 $EndDate =mysqli_real_escape_string($connection, $_POST['EndDate']);
 

 $sql = "INSERT INTO `room` (RoomType, NumberOfPerson,NumberOfRoom,Date,Month,year,EndDate)  VALUES ('$RoomType','$NumberOfPerson','$NumberOfRoom','$Date', '$Month','$year' ,'$EndDate')";
 $result = mysqli_query($connection, $sql);
 if($result){
  $smsg = "User Registration successfull";
 }else{
  $fmsg = "User registration failed";
 }
}
?>
<div class=" container col">
      <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Check In  </h2>
        <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
       
            <input type="text"  name="RoomType" id="inputRoomType" class="form-control"  placeholder="RoomType" required>
        
        
        <input type="varchar"name="NumberOfPerson" id="inputNumberOfPerson" class="form-control"  placeholder="NumberOfPerson"required>
        
        
   
            <input type="Number" name="NumberOfRoom" id="inputNumberOfRoom" class="form-control"  placeholder="NumberOfRoom"required >
        
            <input type="Number"name="Date" id="inputDate" class="form-control"  placeholder="Date"required>
            <input type="Number"name="Month" id="inputMonth" class="form-control"  placeholder="Month"required>
          
            <input type="varchar"name="year" id="inputyear" class="form-control"  placeholder="year"required>
        <input type="varchar" name="EndDate" id="inputEndDate" class="form-control" placeholder="EndDate" required>
        <button class="btn btn-default" >
        Submit</button> 
        </div>
          <div class="container">
 <h2>Rooms & Tariff</h2><?php



?>
<!-- <

// $Email = $_SESSION['Email'];

// echo"welcome $Email";
// echo"<a href='rooms-tariff.php'>rooms-tariff</a>";

// ?>


   
//  <

//  } else {
//    ?>
//    Not logged in HTML and code here
//    <
//  }
?> -->



<div class="row">
<div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/25.jpg" class="img-responsive"><div class="info"><h3>Royal Suite</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/wing.jpg" class="img-responsive"><div class="info"><h3>Wing</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/double.jpg" class="img-responsive"><div class="info"><h3>Double Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/10.jpg" class="img-responsive"><div class="info"><h3>Double Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/11.jpg" class="img-responsive"><div class="info"><h3>Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/9.jpg" class="img-responsive"><div class="info"><h3>Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/rooom.jpg" class="img-responsive"><div class="info">
    <h3> Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p>
    <a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/11.jpg" class="img-responsive"><div class="info"><h3>Double Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/9.jpg" class="img-responsive"><div class="info"><h3> Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/10.jpg" class="img-responsive"><div class="info"><h3>Double Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/11.jpg" class="img-responsive"><div class="info"><h3>Double Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>
  <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="photos/10.jpg" class="img-responsive"><div class="info"><h3> Room</h3><p> Missed lovers way one vanity wishes nay but. Use shy seemed within twenty wished old few regret passed. Absolute one hastened mrs any sensible</p><a href="room-details.php" class="btn btn-default">Check Details</a></div></div></div>  
</div>

                     <div class="text-center">
                     <ul class="pagination">
                     <li class="disabled"><a href="#">«</a></li>
                     <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
                     <li><a href="#">2</a></li>
                     <li><a href="#">3</a></li>
                     <li><a href="#">4</a></li>
                     <li><a href="#">5</a></li>
                     <li><a href="#">»</a></li>
                     </ul>
                     </div>


</div>
<?php include 'footer.php';?>