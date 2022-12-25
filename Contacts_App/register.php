<?php 
include 'apis/db.php';
include 'apis/response.php';

// session_start();
// if ((isset($_SESSION['username']))) {
//   header("location: ./form.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
       
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
            crossorigin="anonymous"/>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
            crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body style="background-image: url('pics/bg02.jpg')">
        <div class="container-fluid " >
            <div class="box col-3"></div>
            <div class="boxs bg-black bg-opacity-50 "> 
            <div class="email ">
                <h5 class="col-md-12 text-danger bg-white bg-opacity-75 rounded-3 p-2" for="emailInput">Register </h5>
                <label class="col-md-12 text-white" for="username">Username </label>
                <input 
                    class="form-control form-control-sm col-md-12"
                    type="email"
                    id="userNameInput"
                    placeholder="Enter Username here"
                />
            </div>
            <div class="">
                <label class="col-md-12 text-white" for="PasswordInput">Password </label>
                <input
                    class="form-control form-control-sm col-md-12"
                    type="text"
                    id="passwordInput"
                    placeholder="Enter password here"
                />
            </div>
            <!-- <div class="">
                <label class="col-md-12 text-white" for="confirmPasswordInput">Confirm Password </label>
                <input
                    class="form-control form-control-sm col-md-12"
                    type="text"
                    id="confirmpasswordInput"
                    placeholder="Enter Confirm password here"
                />
            </div> -->
            <div class="">
                <label class="col-md-12 text-white" for="emailInput"> Email </label>
                <input
                    class="form-control form-control-sm col-md-12"
                    type="text"
                    id="emailInput"
                    placeholder="Enter Email here"
                />
            </div>
            <div class="">
                <label class="col-md-12 text-white" for="NumberInput">Phone Number </label>
                <input
                    class="form-control form-control-sm col-md-12"
                    type="text"
                    id="phoneNumberInput"
                    placeholder="Enter Number here"
                />
            </div>
            
            <div class="row">
                <p class="col-sm text-danger" id="errors"></p>  
            </div>
            <div class="row justify-content-center col-md-12" style="margin-top: 10px">
                <button class="btn btn-primary col-sm-3" id="registerButton" onclick="register()">
                    REGISTER
                </button>
            </div>
        </div>
         <div class="col-3 box"> </div> 
    </div>
    </body>
    <style>
   
  .k{
    display :flex;
    justify-content:center;
    align-items: center;
   }
   .box{
    margin-top : 100px;
   }
   .boxs{
    border-radius: 10%;
    margin-top : 100px;
    margin-right : 750px;
    padding : 50px;
   }
  </style>


</html>

