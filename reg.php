<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
        
        <div class="container">
            <form class="form-group" name="reg">
                <div class="col" style="margin-top: 10%;margin-left: 15%;margin-right:10%;padding-left: 100px;padding-top: 100px;padding-right: 100px; background-color: white;box-shadow:0px 0px 15px 0px black">
                    <div class="col-md-12">
                        <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
                    </div><br>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                    </div><br>
                    <div class="col-md-8">
                        <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div><br>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="mobile_no" placeholder="Mobile number">
                    </div><br>
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="city" placeholder="city">
                    </div><br>
                    <div class="col-sm-8">
                        <select name="state" id="state" class="form-control">
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
                    <div class="col-md-8">
                        <input type="text" class="form-control" name="address" placeholder="Address">
                    </div><br>
                    <div class="col-md-8">
                        <input type="date" class="form-control" name="birth_date" placeholder="dd-mm-yyy">
                    </div><br>
                    <div class="col-md-8">
                        <input type="radio" name="gender" id="m" value="m" required="" >Male
                    &nbsp;&nbsp;
                        <input type="radio" name="gender" id="f" value="f" required >Female<br><br>
                    </div><br>
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary">Submit</button>
                    </div><br>
                </div>

            </form>
        </div>
        <div class="footer">
            <table style="width:100%; ">
                <tbody>
                    <tr>

                        <td>
                            <p style="color: white; background-color: black; text-align: center;padding-top:10px; padding-bottom:10px;
                             font-size:20px; font-weight: 300;"> <b>Website: Car Care ©2021 Developed BY : Rahul Gohel, Parin Kuhada, Priyank Dodiya, Riddhi Chaniyara.</b> </p>
                        </td>
                    </tr>
                </tbody>
            </table>
	    </div>
    </div>          

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>