<?php
    
include("db_connect.php");
$msg = "";
//print "<pre>";
//print_r($_GET);
//die;
if(isset($_GET['updateid']))
	{
		$id = $_GET['updateid'];
		
		$q_sel = "select * from sell_buy where id='$id'";
    
		$result = mysqli_query($connect, $q_sel);

		$reg=mysqli_fetch_array($result,MYSQLI_ASSOC);
        /*print "<pre>";
        print_r($data);
        die;*/
	
    }
if(isset($_POST['submit']))
{
    
    $nm = $_POST['name'];
    $mn = $_POST['mno']; 
    $cnm = $_POST['cname'];  
    $em = $_POST['email'];
    $city = $_POST['city'];
    $st = $_POST['state'];
    $yr = $_POST['year'];
    $km = $_POST['kmdriven'];
    $cartype = $_POST['car_type'];
    $fuel = $_POST['fuel_type'];
    $trans = $_POST['transmission'];
    $owner = $_POST['owner'];
    $price = $_POST['price'];
    $decrp = $_POST['cardescription'];
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    
    
    
        $update = "update sell_buy SET name='$nm',email='$em',mobile='$mn',city='$city',state='$st',Car_name='$cnm',km_driven='$km',year='$yr',car_type='$cartype',fuel='$fuel',
        transmission='$trans',$owner='owner',price='$price',description='$decrp',images='$file' where id='$id';";
        

    
    
    $Result = mysqli_query($connect,$update);
    if($Result)
    {
      echo '<script>alert("Data Updated Successfully..!")</script>';
        echo "<script>location.replace('admin_carsell.php'); </script>";
    }
    else
    {
        echo "Error in Data Updation ".mysqli_error($connect);
    }
}


	
?>
<?php
session_start();
 if($_SESSION['is_login1']===true){?>



<html>
  
    <head>
      <title>Car Sell</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="Fonts\fontawesome-free-5.15.3-web\fontawesome-free-5.15.3-web\css\all.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    
    <body style="background-image: url('Images/carsellbg.jpg'); background-size: cover;">
      <div class="main">
        <div class="nav-bar" style="height:15%">
          <div class="nav-logo">
                <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
                
          </div>
            
              <h1 style="color:green;font-weight:900;margin-left:30%;font-size:50px">Car Sell</h1>
                
            
            
        </div> 
        
        <div  style="margin-top:10%;margin-left:10%;margin-bottom:10%;width:50%;opacity:0.9">
            <form method="post" enctype="multipart/form-data" style="font-size:20px;background-color: white;border: 8px solid black;padding: 30px;border-radius:50px">
              <span class="border border"><div class="form-group">
                <label for="name">Name*</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo $reg['name'];?>" placeholder="Full name" required>
              </div></span><br>
              <div class="form-group">
                <label for="email">Email address*</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $reg['email'];?>" aria-describedby="emailHelp" placeholder="Enter email" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div><br>
              <div class="form-group">
                <label for="mno">Mobile*</label>
                <input type="tel" class="form-control" id="mno" name="mno" value="<?php echo $reg['mobile'];?>" placeholder="Mobile no." required>
              </div><br>
              <div class="form-group">
                <label for="name">City*</label>
                <input type="text" class="form-control" id="city" name="city" value="<?php echo $reg['city'];?>" placeholder="City" required>
              </div><br>
              <div class="form-group">
                        <label for="state">State</label><br>
                        <select id="state" name="state" class="form-control" value="<?php echo $reg['state'];?>" required>
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
                <input type="text" class="form-control" id="cname" name="cname" value="<?php echo $reg['Car_name'];?>" placeholder="Car name" required>
              </div></span><br>
              <div class="form-group">
                <label for="year">Year*</label>
                <input type="tel" class="form-control" id="year" name="year" value="<?php echo $reg['year'];?>" placeholder="Year." required>
              </div><br>
              <div class="form-group">
                <label for="kmdriven">KM Driven*</label>
                <input type="tel" class="form-control" id="kmdriven" name="kmdriven" value="<?php echo $reg['km_driven'];?>" placeholder="KM Driven." required>
              </div><br>
              
              <div class="form-group">
                <label for="car_type">Select Car Type*</label>
                <select class="form-control" id="car_type " name="car_type" value="<?php echo $reg['car_type'];?>" required>
                  <option>Choose</option>
                  <option>Sedan</option>
                  <option>SUV</option>
                  <option>MUV</option>
                  <option>Sports Car</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="fuel_type">Fuel*</label>
                <select class="form-control" id="fuel_type" name="fuel_type" value="<?php echo $reg['fuel'];?>" required>
                  <option>Choose</option>
                  <option>Petrol</option>
                  <option>Diesel</option>
                  <option>CNG</option>
                  <option>Electric</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="transmission">Transmission*</label>
                <select class="form-control" id="transmission" name="transmission" value="<?php echo $reg['transmission'];?>" required>
                  <option>Choose</option>
                  <option>Automatic</option>
                  <option>Manual</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="owner">No. of Owners*</label>
                <select class="form-control" id="owner" name="owner" value="<?php echo $reg[12];?>" required>
                  <option>Choose</option>
                  <option>1st</option>
                  <option>2nd</option>
                  <option>3rd</option>
                  <option>4th</option>
                  <option>4+</option>
                </select>
              </div><br>
              <div class="form-group">
                <label for="price">Set Price*</label>
                <input type="tel" class="form-control" id="price" name="price" value="<?php echo $reg['price'];?>" placeholder="Price" required>
              </div><br>
              <div class="form-group">
                <label for="cardescription">Add more Description about your car*</label>
                <textarea class="form-control" id="cardescription" name="cardescription" value="<?php echo $reg['description'];?>" required rows="3"></textarea>
              </div><br>
              
              <p style="margin-top: 2%; display: none;">
              <input id="fileupload" type="file" name="image" value="<?php echo $reg['images'];?>" required multiple="multiple"/></p><br>
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
    echo '<script>alert("Admin Login Requirement")</script>';
    echo "<script>location.replace('admin_login.php');</script>";
}?>