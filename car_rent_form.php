<?php
session_start();
 if($_SESSION['is_login']===true){?>
<!DOCTYPE html>
<html>
  
    <head>
      <title>Car Sell</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="Fonts\fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <style>
        .view-customer:hover{
            color:white;
        }
      </style>
    </head>

    
    <body style="background-image: url('Images/carrentbg.jpg'); background-size: cover;">
      <div class="main">
        <div class="nav-bar" style="height:15%;position:absolute">
          <div class="nav-logo">
                <a href="home.php"><marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee></a>
                
          </div>
          
              <h1 style="color:green;font-weight:900;margin-left:30%;font-size:50px">Car Rent</h1>
              
            
            
        </div> 
        <div  style="margin-top:10%;margin-left:10%;margin-bottom:10%;width:50%;opacity:0.9">
        

            <form method="post" enctype="multipart/form-data" style="font-size:20px;background-color: white;border: 8px solid black;padding: 30px;border-radius:50px">
              <span class="border border"><div class="form-group">
                <label for="name">Name*</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name"  title="Name should be from [A-Za-z]" required>
              </div></span><br>
              <div class="form-group">
                <label for="email">Email address*</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div><br>
              <div class="form-group">
                <label for="mno">Mobile*</label>
                <input type="tel" class="form-control" id="mno" name="mno" placeholder="Mobile no." maxlength="10" required>
              </div><br>
              <div class="form-group">
                <label for="name">City*</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City" required>
              </div><br>
              <div class="form-group">
                        <label for="state">State</label><br>
                        <select id="state" name="state" class="form-control" required>
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

                        </select>
              </div><br>
              <div class="form-group">
                <label for="cname">Car Name*</label>
                <input type="text" class="form-control" id="cname" name="cname" placeholder="Car name"  title="Name should be from [A-Za-z]" required>
              </div></span><br>
              
              
              <div class="form-group">
                <label for="car_type">Select Car Type*</label>
                <select class="form-control" id="car_type " name="car_type" required>
                  <option>Choose</option>
                  <option>Sedan</option>
                  <option>SUV</option>
                  <option>MUV</option>
                  <option>Sports Car</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="fuel_type">Fuel*</label>
                <select class="form-control" id="fuel_type" name="fuel_type" required>
                  <option>Choose</option>
                  <option>Petrol</option>
                  <option>Diesel</option>
                  <option>CNG</option>
                  <option>Electric</option>
                </select>
              </div><br>
              
              
              <div class="form-group">
                <label for="price"> Rs/- Per Kilometer*</label>
                <input type="tel" class="form-control" id="price" name="price" placeholder="Price" maxlength="2" required>
              </div><br>
              <div class="form-group">
                <label for="cardescription">Add more Description about your car*</label>
                <textarea class="form-control" id="cardescription" name="cardescription" required rows="3"></textarea>
              </div><br>
              
              <p style="margin-top: 2%; display: none;">
              <input id="fileupload" type="file" name="image" required multiple="multiple"/></p><br>
              <label for="fileupload"><i class="fas fa-upload" 
                style="color: white;display: block; font-size: 20px;padding:10px ;background-color: rgb(0, 0, 167);
                text-align: center;border-radius: 5px;margin: auto;">&nbsp Add Image</i></label>
              <hr />
              <b>Images</b>
              <br />
              <br />
              <div id="dvPreview" widht="20">
              </div><br>
              
              <button type="submit" class="btn btn-primary" name="submit" style="float: right;">Submit</button><br/>
            <script language="javascript" type="text/javascript">
              window.onload = function () {
                  var fileUpload = document.getElementById("fileupload");
                  fileUpload.onchange = function () {
                      if (typeof (FileReader) != "undefined") {
                          var dvPreview = document.getElementById("dvPreview");
                          dvPreview.innerHTML = "";
                          var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
                          for (var i = 0; i < fileUpload.files.length; i++) {
                              var file = fileUpload.files[i];
                              if (regex.test(file.name.toLowerCase())) {
                                  var reader = new FileReader();
                                  reader.onload = function (e) {
                                      var img = document.createElement("IMG");
                                      img.height = "150";
                                      img.width = "150";
                                      img.src = e.target.result;
                                      dvPreview.appendChild(img);
                                  }
                                  reader.readAsDataURL(file);
                              } else {
                                  alert(file.name + " is not a valid image file.");
                                  dvPreview.innerHTML = "";
                                  return false;
                              }
                          }
                      } else {
                          alert("This browser does not support HTML5 FileReader.");
                      }
                  }
              };
            </script>
            </form>
          </div>
            
        
          <div class="footer">
              <table style="width:100%; ">
                  <tbody>
                      <tr>

                          <td>
                              <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                              margin-bottom:0%; font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
        </div>
      </div>
    </body> 
</html>
<?php }
else{
    echo '<script>alert("Login Requirement")</script>';
    echo "<script>location.replace('index.php');</script>";
}?>
<?php

    
	include('db_connect.php');
	$msg = "";
	if(isset($_POST['submit']))
	{
    $nm = $_POST['name'];
    $mn = $_POST['mno'];
    $city = $_POST['city'];
    $st = $_POST['state']; 
    $cnm = $_POST['cname'];  
    $em = $_POST['email'];
    $cartype = $_POST['car_type'];
    $fuel = $_POST['fuel_type'];
    $price = $_POST['price'];
    
    $decrp = $_POST['cardescription'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        
		//existing email address in our database
		//$sql = "SELECT User_id FROM registration WHERE Email_id = '$em' LIMIT 1" ;
		
		//$check_query = mysqli_query($connect,$sql);
		//$count_em = mysqli_num_rows($check_query);
    
    $query= mysqli_query($connect,"select * from car_rent where email='$em'");
    $query3= mysqli_query($connect,"select * from car_rent where mobile='$mn'");
    if(mysqli_num_rows($query)>0){
        echo '<script>alert("Email already exist..!")</script>';
    }
    elseif(mysqli_num_rows($query3)>0){
        echo '<script>alert("Mobile number already exist..!")</script>';
    }
          else{
            $q_ins = "insert into car_rent(name,email,mobile,city,state,car_name,car_type,fuel,rs_per_km,description,image)
            Values('$nm','$em','$mn','$city','$st','$cnm','$cartype','$fuel','$price','$decrp','$file')";
            
            
            
            if($connect->query($q_ins) === TRUE)
            {
                

                echo '<script>alert("Data Inserted Successfully..!")</script>';
                echo "<script>location.replace('car_rent.php');</script>";
            }
            else
            {
                $msg = "Error: " . $q_ins . "<br>" . $connect->error;
            }        		
          }
       
		
    }
?>