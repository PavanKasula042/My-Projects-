<?php 
include 'apis/db.php';
include 'apis/response.php';

//  session_start();
// if (!(isset($_SESSION['username']))) {
//   header("location: ./login.php");
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>FORM</title>
</head>
<body>
    <div class="container-fluid p-0 m-0">

    <nav class="navbar navbar-light bg-dark m-0 p-3">
    <button type="button" class="btn btn-secondary" id="home">Home</button>
<button type="button" class="btn btn-primary" id="phonesbook" onclick="location.assign('passbook.php')" >Phonebook </button>
<div class="d-flex">
    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-person-lines-fill text-white" viewBox="0 0 16 16">
        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
    </svg> 
    <h4 class="text-white" id="userId"> </h4>
</div>
<a type="button" class="btn btn-danger" id="logoutbutton" href="apis/logout.php" >Logout</a>
</nav>
        
        <div class="row">
            <div> 
                <h4 class="bg-dark text-white rounded-3 p-2"> PLEASE ENTER </h4>
            <label> ENTER NAME :</label>
            <input type="text" id="nameInput" class="form-control form-control-sm" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> 
            </div>
            <div> 
            <label> ENTER Phone Number :</label>
            <input type="text" id="phoneInput" class="form-control form-control-sm" placeholder="Phone Number"> 
            </div>
            <div> 
                <label> ENTER Relation :</label>
                <input type="text" id="relationInput" class="form-control form-control-sm" placeholder="Relation"> 
                </div> 
                <!-- <div> 
                <label> ENTER NAME :</label> 
                <input type="text" class="form-control form-control-sm" placeholder="Username"> 
                </div> -->
                <div> 
               <button type="button" class="btn btn-success mt-2" id="submit" href="apis/logout.php" onclick="submit()">SUBMIT</button>        
               </div>
        </div>
    </div>
</body>
<style>
    .row {
        padding: 25px;
        margin-top : 50px;
        margin-left: 250px;
        margin-right :250px;
        border :solid 3px black;
        border-radius: 20px;
    }

    </style>
    <script>
        if (localStorage.getItem("username") == null){
            window.location.assign("login.php");
        }
        $("#logoutbutton").click(function () {
            localStorage.removeItem("username");
            window.location.assign("login.php");
        });
</script>

</html>