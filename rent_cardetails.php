<?php
session_start();
 if($_SESSION['is_login']===true){?>


<html>
    
    <head>
        <title>Car Care</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

        <style>
          .open-button:hover{
            background:red;
            transition:0.5s;
          }
          .open-button{
            color:white;
            font-size:20px;
            cursor:pointer;
            width:15%;
            height:8%;
            float:right;
            margin-right:9%;
            background:black;
          }
        </style> 
    </head>

    <body>
        <?php  
                      include("db_connect.php");
                      $msg = "";
                      if(isset($_GET['rentid']))
                      {
                        $id = $_GET['rentid'];
                        
                        $q_sel = "select * from car_rent where Id='$id'"; 
                        $result = mysqli_query($connect, $q_sel);  
                        $row = mysqli_fetch_array($result);
                      
                        $rowcount = mysqli_num_rows($result);
                      
                          
                            
                          ?>
                          
                              
                              <?php  
                                
                                if(isset($_GET['rentid']))
                                {
                                  $id = $_GET['rentid'];
                                  
                                  $q_sel = "select * from car_rent where Id='$id'"; 
                                  $result = mysqli_query($connect, $q_sel);  
                                  $row = mysqli_fetch_array($result);
                                
                                  $rowcount = mysqli_num_rows($result);
                                
                                    
                                      
                                    ?>
                                    <h1 style="float:right;margin-right:20%;font-size:50px"><?php echo $row[6];?></h1>
                                    
                                    <div style="margin-top:5%;margin-left:5%;background-color:transparent"><?php echo '
                                    
                                    <img src="data:image/jpg;base64,'.base64_encode($row['image'] ).'" height="500" width="700"/>';?></div>
                                        <br><br><p style="float:right;margin-right:32%;font-size:20px;margin-top:-19%;font-weight:900">Rs Per Km <h1 style="float:right;margin-right:15%;font-size:40px;margin-top:-20%"><?php echo $row[9];?> rs</h1>
                                        <p style="float:right;margin-right:31%;font-size:15px;margin-top:-25%">Description <h1 style="float:right;margin-right:17%;font-size:20px;margin-top:-25%"><?php echo $row[10];?></h1>
                                        <fieldset style="width:30%;height:30%;float:right;margin-right:9%;margin-top:-15%"><legend style="text-align:center;color:blue"><h1 style="font-size:40px">Seller Details</h1></legend>
                                        <br><p style="color:black;padding-left:20px">Name <h3 style="color:black;float:right;margin-right:10%;margin-top:-3%"><?php echo $row[1];?></h3>
                                        <br><p style="color:black;padding-left:20px">Email <a href="mailto:<?php echo $row[2];?>?subject=Mail from <?php echo $_SESSION['email-through'];?>" style="text-decoration:none"><h3 style="color:blue;float:right;margin-right:10%;margin-top:-3%;cursor:pointer"><?php echo $row[2];?></a></h3>
                                        <br><p style="color:black;padding-left:20px">Mobile No <h3 style="color:black;float:right;margin-right:10%;margin-top:-3%"><?php echo $row[3];?></h3>
                                        <br><p style="color:black;padding-left:20px">City <h3 style="color:black;float:right;margin-right:10%;margin-top:-3%"><?php echo $row[4];?></h3>
                                        <br><p style="color:black;padding-left:20px">State <h3 style="color:black;float:right;margin-right:10%;margin-top:-3%"><?php echo $row[5];?></h3>
                                      </fieldset>
                                      <button class="open-button" name="open-button" onclick="openForm()">Book Now</button>
                                        <!--<span style="margin:1%;padding:60px;border:5px solid black;background:white;border-radius:50px;">--> 
                                        
                                        <br><div style="">
                                          <p style="color:black;margin-left:5%">Car Type  <br><h3 style="color:black;margin-left:5%;padding:2px;font-size:30px"><?php echo $row[7];?></h3></p>
                                          <p style="color:black;margin-left:20%;margin-top:-3%">Fuel  <br><h3 style="color:black;margin-left:20%;padding:2px;font-size:30px"><?php echo $row[8];?></h3></p>
                                          <p style="color:black;margin-left:40%;margin-top:-3%">Rs Per Km <br><h3 style="color:black;margin-left:40%;padding:2px;font-size:30px"><?php echo $row[9];?></h3></p>
                                          
                                          
                                          
                                          
                                          
                                         
          
                                        </div>
                                        <!--<a href="" style="float:right;text-decoration:none;color:blue;font-size:20px;padding-top:10px;">Buy now</a>-->
                                      
                                      
                                      
                                      <br>
                                    <?php 
                                }?>
              <div class="loginPopup">
                <div class="formPopup" id="popupForm">
                  <form  method="post" class="formContainer">
                    <h2 style="color:white;margin-left:20%">Send Your Details</h2><br>
                    <label for="name">
                      <strong style="color:white">Full Name</strong>
                    </label><br>
                    <input type="text" id="name" placeholder="Your Name" name="name" title="Name should be from [A-Za-z]" required><br>
                    <label for="email">
                      <strong style="color:white">E-mail</strong>
                    </label><br>
                    <input type="email" id="email" placeholder="Your Email" name="email" required><br>
                    <label for="mobile">
                      <strong style="color:white">Mobile Number</strong>
                    </label><br>
                    <input type="text" id="mobile" placeholder="Your Mobile Number" maxlength="10" name="mobile" pattern="[0-9]{10}" title="Number should be from [0-9]" required><br>
                    <label for="city">
                      <strong style="color:white">City</strong>
                    </label><br>
                    <input type="text"  id="city" name="city" placeholder="Your City" required><br>
                    <label for="state">
                      <strong style="color:white">State</strong>
                    </label><br>
                    <select id="state" name="state"  required>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option>
                      <option value="Bihar">Bihar</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</option>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu Kashmir">Jammu Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="kerala">kerala</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Odisha">Odisha</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Telangana">Telangana</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="Uttarakhand">Uttarakhand</option>
                      <option value="West Bengal">West Bengal</option>

                    </select><br>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button><br/>
                    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
                  </form>
                </div>
              </div>
            <script>
              function openForm() {
                document.getElementById("popupForm").style.display = "block";
              }
              function closeForm() {
                document.getElementById("popupForm").style.display = "none";
              }
            </script>
                                     
                                     <div class="footer">
                    <table style="width:100%; ">
                      <tbody>
                        <tr>

                            <td>
                                <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                                margin-top:10%; font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                            
                          <?php 
                      }?>
    </body>
</html>

<?php

    
  include('db_connect.php');
  $msg = "";

  if(isset($_POST['submit']))
  {
      
      $nm = $_POST['name'];
      
      $st = $_POST['state'];
      $mobile = $_POST['mobile'];
      $city = $_POST['city'];
      $em = $_POST['email'];
    
      
      

      //existing email address in our database
      //$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
      
      //$check_query = mysqli_query($connect,$sql);
      //$count_em = mysqli_num_rows($check_query);
      
      $query= mysqli_query($connect,"select * from buy where email='$em'");
        $query3= mysqli_query($connect,"select * from buy where mobile='$mobile'");
        if(mysqli_num_rows($query)>0){
            echo '<script>alert("Email already exist..!")</script>';
        }
        elseif(mysqli_num_rows($query3)>0){
            echo '<script>alert("Mobile number already exist..!")</script>';
        }
		else{
          $q_ins = "insert into buy(name,email,mobile,city,state)values('$nm','$em','$mobile','$city','$st');";
          
          
          
          if($connect->query($q_ins) === TRUE)
          {
              echo '<script>alert("Your Details Sent to Seller..!")</script>';
              echo "<script>location.replace('sell&buy.php');</script>";
          }
          else
          {
              $msg = "Error: " . $q_ins . "<br>" . $connect->error;
          } 
        }       		
      
      
      
  }
?>        

<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('index.php');</script>";
}?>