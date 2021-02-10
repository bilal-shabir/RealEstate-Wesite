
<?php 
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Profile</title>
  <link rel="stylesheet" type="text/css" href="css/style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">

    body{
        height: 100%;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  font-smoothing: antialiased;
    }
    .left{
      float: left;
    }
    .right{
      float: left;
      margin-left: 10px;
      width: 600px;
      
    }
    .link{
      text-decoration: none;
      color: black;
    }
    .tab{
      margin-left: 0px;
      float: left;
      border: 1px solid none;
      background-color: #809fff;
      width: 22%;
      min-height: 1000px;
    }
    .tab button {
      display: block;
      background-color: inherit;
      color: black;
      padding: 22px 16px;
      width: 100%;
      border: none;
      outline: none;
      text-align: left;
      cursor: pointer;
      transition: 0.3s;
      font-size: 17px;
}

  .tab button:hover {
    background-color: #4d79ff; 
  }

  .tab button.active {
  background-color: #4d79ff;
}
.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 76%;

  height: 100%;

}
.image{
  margin-top: 10px;
  margin-left: 68px;
  border:1px solid none;
  border-radius: 4px;
  height: auto;


}
.signoutbtn{
  height: 31px;
  background-color:#4d79ff;
  border: 1px solid #4d79ff; 
  border-radius: 4px;
  padding: 5px;
  margin-left: 960px;
  margin-top: 8px;
  cursor: pointer;
}
.profilewrap{
  padding: 10px;
  margin-left: 23px;
  margin-top: 10px;
  width: 800px;
  height: 370px;
  border:1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
}
.profileinfo{
  padding: 10px;
}
.ebutton{
  padding: 6px 15px;
  margin-left: 9px;
  margin-top: 4px;
  cursor: pointer;
  background-color: #ffba66;
  border: 1px solid #ffba66;
  border-radius: 4px;
}
.editform{
  padding: 10px;
}
.orderwrap{
  width: 80%;
  margin-left: 23px;
  margin-top: 10px;
  border:1px solid #ccc;
  background-color: #fff;
  border-radius: 4px;
  padding: 10px;
  float: left;
  min-height: 100px;
  margin-bottom: 15px;
  padding: 10px;
}
.s
{
  text-decoration: none;
  box-shadow:inset 0px 1px 0px 0px #faf1dc;
  background:linear-gradient(to bottom, #ffca7a 5%, #eda11f 100%);
  background-color:#ffca7a;
  border-radius: 5px;
  border:1px solid #faa032;
  cursor:pointer;
  font-weight:normal;
  color: #ffffff;
  padding: 4px 9px;
  margin-left: 90%;
}
.s:hover {
    background:linear-gradient(to bottom, #eda11f 5%, #ffca7a 100%);
  background-color:#eda11f;
}
.s:active {
  position:relative;
  top:1px;
}
.s1
{
  text-decoration: none;
  box-shadow:inset 0px 1px 0px 0px #faf1dc;
  background:linear-gradient(to bottom, #ffca7a 5%, #eda11f 100%);
  background-color:#ffca7a;
  border-radius: 5px;
  border:1px solid #faa032;
  cursor:pointer;
  font-weight:normal;
  color: #ffffff;
  padding: 4px 9px;
  margin-left: 60%;
}
.s1:hover {
    background:linear-gradient(to bottom, #eda11f 5%, #ffca7a 100%);
  background-color:#eda11f;
}
.s1:active {
  position:relative;
  top:1px;
}
.questionwrap{
  width: 80%;
  margin-left: 23px;
  margin-top: 30px;
  border:1px solid #ccc;
  background-color: #fff;
  border-radius: 4px;
  padding: 10px;
  float: left;
  min-height: 100px;
  margin-bottom: 15px;
}
.slink{
  width:100%;background-color:#fff;padding:0;margin:0;float:left;height: 20px;padding: 2px;text-align: left;border:1px solid #fff;
}
.slink:hover{
  background-color: #b3b3ff;
  border: 1px solid #b3b3ff;
  cursor: pointer;
}
.cartr{
  color: black;
  padding: 0;
}
.cartr:hover{
  cursor: pointer;
  color: red;
  -ms-transform: scale(1.2); 
        -webkit-transform: scale(1.2); 
        transform: scale(1.2); 
}
.cartl{
  color:blue;cursor:pointer;
}
.cartl:hover{
  color: #cc7a00;
}
.cartbtn {
  box-shadow:inset 0px 1px 0px 0px #faf1dc;
  background:linear-gradient(to bottom, #ffca7a 5%, #eda11f 100%);
  background-color:#ffca7a;
  border-radius:6px;
  border:1px solid #faa032;
  display:inline-block;
  cursor:pointer;
  color:#ffffff;
  font-family:Arial;
  font-size:15px;
  font-weight:bold;
  padding:6px 10px;
  text-decoration:none;
  text-shadow:0px 1px 0px #ccae54;
  width: 100px;
  margin-right: 80px;
  margin-top: 8px;


}
.cartbtn:hover {
    background:linear-gradient(to bottom, #eda11f 5%, #ffca7a 100%);
  background-color:#eda11f;
}
.qbtn{
      box-shadow: 0px 1px 0px 0px #f0f7fa;
  background:linear-gradient(to bottom, #f55d5d 5%, #d61a1a 100%);
  background-color:#f55d5d;
  border-radius:6px;
  border:1px solid #ff0303;
  cursor:pointer;
  color:#ffffff;
  
  font-size:12px;
  font-weight:normal;
  padding:6px 14px;
  text-decoration:none;
  text-shadow:0px -1px 0px #5b6178;
    }
    
    .qbtn:hover{
      background:linear-gradient(to bottom, #d61a1a 5%, #f55d5d 100%);
  background-color:#d61a1a;
    }
    .bbtn{
    padding:5px 14px; 
  text-decoration: none;
  box-shadow:inset 0px 1px 0px 0px #246bff;
    background:linear-gradient(to bottom, #246bff 5%, #1c54ff 100%);
    background-color:#ffca7a;
    border-radius: 5px;
    border:1px solid #246bff;
    cursor:pointer;
    font-weight:normal;
    color: #ffffff;
  }
  .bbtn:hover{
      background:linear-gradient(to bottom, #1c54ff 5%, #246bff 100%);
    background-color:#1c54ff;
  }

  </style>


</head>
<body>
  <nav style="position: relative;">
    <h2><a href="index.php">Sanad Real Estate</a></h2>
    <form method="POST" action="signout.php">
      <input type="submit" class="signoutbtn" value="Sign Out">
    </form>
  </nav>

  <div class="tab">
   
    <button class="tablinks" onclick="openCity(event, 'Profile')"  id="defaultOpen"><b>Profile</b></button>
    <button class="tablinks" onclick="openCity(event, 'Orders')" ><b>Reservations</b></button>
    <button class="tablinks" onclick="openCity(event, 'Cart')"><b>Your Properties</b></button>
  </div>

  <div id="Profile" class="tabcontent">
    <div class="profilewrap" style="font-size: 15px"><?php
    require 'dbh.php';
  extract($_POST);
  $username=$_SESSION['username'];
  $sql= "SELECT * FROM users WHERE username='$username';";
  $result=mysqli_query($conn, $sql);
  $row=mysqli_fetch_assoc($result);
  ?>
  <?php if (!isset($edit) AND !isset($_SESSION['pswerror'])) {?>
    <p class="profileinfo"><b>Name: &nbsp; </b><?php echo "".$row['fullname'].""; ?></p>
    <p class="profileinfo"><b>Username: &nbsp;</b><?php echo "".$row['username'].""; ?></p>
    <?php
      if ($row['number']==0) { ?>
          <p class="profileinfo"><b>Contact: &nbsp;</b><?php echo "Not added"; ?></p>
             <?php  }
      else{


     ?>
     <p class="profileinfo"><b>Contact: &nbsp;</b><?php echo "<span style='font-family:Arial, sans serif;font-size:13px;'>".$row['number']."<span>"; ?></p>
   <?php } ?>
   <?php
    if ($row['address']==null) {?>
      <p class="profileinfo"><b>Address: &nbsp;</b><?php echo "Not added"; ?></p>
    <?php }
    else{
    ?>
   <p class="profileinfo"><b>Address: &nbsp;</b><?php echo "".$row['address'].""; ?></p>
 <?php } ?>


    <p class="profileinfo"><b>E-mail: &nbsp;</b><?php echo "".$row['email'].""; ?></p>
    <p class="profileinfo"><b>Password: &nbsp;</b>*********</p>
    <form method="POST">
      <input type="submit" name="edit" value="Edit Profile" class="ebutton">
    </form>
  <?php } ?>

  <?php if (isset($edit) OR isset($_SESSION['pswerror'])) { ?>
    <form method="POST" action="editprofile.php" class="editform">
      <?php 
        if (isset($_SESSION['pswerror'])) {
          echo "<p style='color: red; font-size:12px;' ><b>*Passwords do not match</b></p>";
        }

      ?>
      Name: <br><input type="text" name="fn" required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;"<?php echo "value='".$row['fullname']."'"; ?>><br>
      <p style="margin-top: 20px;">Email: <br><input required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="email" name="em" <?php echo "value='".$row['email']."'"; ?>><br></p>
      <?php
        if ($row['number'] != 0) { ?>
          <p style="margin-top: 20px;">Contact: <br><input min="0" required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="number" name="num"<?php echo "value='".$row['number']."'"; ?>><br></p>
        <?php }
        else {
       ?>
      <p style="margin-top: 20px;">Contact: <br><input required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="number" name="num" min="0" ><br></p>
      <?php }
      if ($row['address'] != 0) { ?>
          <p style="margin-top: 20px;">Address: <br><input required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="text" name="addr"<?php echo "value='".$row['Adrress']."'"; ?>><br></p>
        <?php }
        else {
       ?>
      <p style="margin-top: 20px;">Addess: <br><input required="required" style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="text" placeholder="not added yet" name="addr"><br></p>
      <?php }

      if (isset($_SESSION['pswerror'])) {
        echo "<p style='margin-top: 20px;'>New Password: <br><input style='padding: 5px; border: 1px solid red; border-radius: 4px;'' type='Password' name='psw'><br></p>";
       echo "<p style='margin-top: 20px;'>Reenter new password: <br><input style='padding: 5px; border: 1px solid red; border-radius: 4px;'' type='Password' name='cpsw' required='required'><br></p>";
      }
      else { ?>
      <p style="margin-top: 20px;">New Password: <br><input style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="Password" name="psw"><br></p>
      <p style="margin-top: 20px;">Reenter new password: <br><input style="padding: 5px; border: 1px solid #ccc; border-radius: 4px;" type="Password" name="cpsw" required="required"><br></p> <?php } ?>
      <input type="submit" name="Change" value="Save changes" style=" padding: 6px 15px; margin-top: 20px; cursor: pointer; background-color: #ffba66; border: 1px solid #ffba66; border-radius: 4px;" class="btnhover">
    <?php 

  } ?>
    </form>
    
</div>
</div>

<div id="Orders" class="tabcontent">
  
    <?php
    $userid= $row['u_id'];
      $sql2="SELECT * FROM reservation where reservedby='$userid';";
      $result2= mysqli_query($conn, $sql2);
      $resultcheck = mysqli_num_rows($result2);
      if ($resultcheck>0) {
          while ($row2 = mysqli_fetch_assoc($result2)) {
            ?>
            <div class="orderwrap">
            <?php
            $pid = $row2['p_id'];
            $agentid = $row2['agent']; 
            $ry = "SELECT * FROM property where p_id='$pid';";
                   $ryt = mysqli_query($conn, $ry);
                   $rty = mysqli_fetch_assoc($ryt);
                   $try = "SELECT * FROM pcoverimage where p_id='$pid';";
                   $tr = mysqli_query($conn, $try);
                   $tyr = mysqli_fetch_assoc($tr);
                  ?>
                  <div class="left">
                    <?php 
                    echo "<a href='single-property.php?propertyid=".$pid."'><img src='uploads/".$tyr['picname']."' height='auto' width='150px' style='border-radius: 2px;' ></a>"
                    ?>
                  </div>
                  <div class="right">
                    <h4><a style="text-decoration: none; color: #000;" href="single-property.php?propertyid=<?php echo $pid ?>"><?php echo $rty['description']; ?> &nbsp; &nbsp; &nbsp;</a><span style="font-size: 10px; color:#d9d9d9;">Reservation ID: <?php echo $row2['id']; ?></span></h4>
                    <?php
                      $sql3 = "SELECT * FROM users where u_id='$agentid';";
                      $result3= mysqli_query($conn, $sql3);
                      $row3 = mysqli_fetch_assoc($result3);

                     ?>
                    <h5 style="margin-top: 5px;">Agent: <?php echo $row3['fullname']; ?></h5>
                    <h5>Property For <?php echo $rty['income']; ?></h5>
                    <h5 style="color: red;"><?php echo $rty['price']; ?> BD</h5>
                    <form style="float: right;" method="POST" action="cancelreservation.php">
                      <?php
                        if ($rty['income']=='rent') { 
                          $pay = $rty['price'];
                          ?>
                          <input type='submit' name='pay' value='Pay upfront' class='bbtn' onclick="return confirm('Pay <?php echo $pay; ?> upfront?')">
                      <?php  }
                        else{
                          $pay = $rty['price']*0.05;
                          ?>
                          <input type='submit' name='pay' value='Pay upfront' class='bbtn' onclick="return confirm('Pay <?php echo $pay; ?> upfront?')">
                        <?php }
                      ?>
                      <input type="submit" name="cancel" value="Cancel" class="qbtn"  onclick="return confirm('Are you sure you want to cancel this reservation?')" >
                      <input type="hidden" name="rid" value="<?php echo $row2['id']; ?>">
                    </form>
                  </div>
                  </div>



         <?php  }
      }
      else{
        echo "<div style='width:250px; height:10px; margin:55px auto; margin-left:400px;'><p style=''><h3>You have no reservations!</h3</p></div>";
      }
    ?>
  
</div>
<div id="Cart" class="tabcontent">
  <div class="orderwrap">
  <?php 
    $uid = $row['u_id'];

    $sql4 = "SELECT * FROM sales where bid='$uid';";
    $result4= mysqli_query($conn,$sql4);
    $resultcheck4 = mysqli_num_rows($result4);

    if ($resultcheck4>0) {
      while ($row4 = mysqli_fetch_assoc($result4)) {
        $a_id=$row4['aid'];
        $sql5 = "SELECT * FROM users where u_id='$a_id';";
        $result5 = mysqli_query($conn,$sql5);
        $row5=mysqli_fetch_assoc($result5);
        ?>
          <p style="margin-top: 5px">Property id: <?php echo $row4['pid']; ?></p>
          <p style="margin-top: 3px">Property agent: <?php echo $row5['fullname']; ?></p>
          <p style="margin-top: 3px">Property location: <?php echo $row4['city']; ?></p>
          <p style="margin-top: 3px;margin-bottom: 5px;">Property price: <span style="color: red;"><?php echo $row4['price']; ?></span></p>
        <?php
        echo "<hr style='width:700px; margin-left:5px; border:1px solid #f2f2f2'>";
      }
    }
    else{
      echo "<h4 style='margin-left:270px;margin-top:15px;'>You have not purchased any property</h4>";
    }

  ?>
  
  </div>
</div>


<script>
function openCity(evt, operation) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(operation).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";

    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</body>
</html>