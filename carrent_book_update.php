<?php
    
include("db_connect.php");
$msg = "";
//print "<pre>";
//print_r($_GET);
//die;
if(isset($_GET['updateid']))
	{
		$id = $_GET['updateid'];
		
		$q_sel = "select * from rent where Id='$id'";
	
		$result = mysqli_query($connect, $q_sel);
		$reg=mysqli_fetch_array($result,MYSQLI_ASSOC);
        /*print "<pre>";
        print_r($data);
        die;*/
	
    }
if(isset($_POST['submit']))
{
    
    $nm = $_POST['name'];
      
      $st = $_POST['state'];
      $mobile = $_POST['mobile'];
      $city = $_POST['city'];
      $em = $_POST['email'];
    
    
    
    
        $update = "update rent SET name='$nm',email='$em',mobile='$mn',city='$city',state='$st';";
        

    
    
    $Result = mysqli_query($connect,$update);
    if($Result)
    {
      echo '<script>alert("Data Updated Successfully..!")</script>';
        echo "<script>location.replace('admin_carrent.php'); </script>";
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
<!DOCTYPE html>



<html>
  
    <head>
      <title>Bootstrap Example</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="styles.css">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    
    <body style="background-color: rgb(121, 121, 121);">
    <div class="main">
      <div class="nav-bar" style="height:15%;">
        <div class="nav-logo">
              
          <marquee direction="left" behavior="scroll" ><i class="fas fa-car"></i> Car Care <i class="fas fa-car"></i></marquee>
              
        </div>
          
          
      </div>
      <div class="loginPopup" >
      <div class="formPopup-update" id="popupForm-update" style="margin-top:7%;">
        <form  method="post" class="formContainer" style="height:55%;">
          <h2 style="color:white">Send Your Details</h2><br>
          <label for="name">
            <strong style="color:white">Full Name</strong>
          </label>
          <input type="text" id="name" placeholder="Your Name" name="name" value="<?php echo $reg['name'];?>" required>
          <label for="email">
            <strong style="color:white">E-mail</strong>
          </label>
          <input type="email" id="email" placeholder="Your Email" name="email" value="<?php echo $reg['email'];?>" required>
          <label for="mobile">
            <strong style="color:white">Mobile Number</strong>
          </label>
          <input type="text" id="mobile" placeholder="Your Mobile Number" name="mobile" value="<?php echo $reg['mobile'];?>" required>
          <label for="city">
            <strong style="color:white">City</strong>
          </label>
          <input type="text"  id="city" name="city" placeholder="Your City" value="<?php echo $reg['city'];?>" required>
          <label for="state">
            <strong style="color:white">State</strong>
          </label>
          <select id="state" name="state" value="<?php echo $reg['state'];?>"  required>
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