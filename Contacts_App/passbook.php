<?php 
include 'apis/db.php';
include 'apis/response.php';

 session_start();
if (!(isset($_SESSION['username']))) {
  header("location: ./login.php");
}

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
    <title>PassBook</title>
</head>
<body>
    <div class="container-fluid m-0 p-0">
    <nav class="navbar navbar-light bg-dark m-0 p-3">
        <a type="button " onclick="location.assign('form.php')"><svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left-square-fill text-white" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg> </a>
  <h5 class="text-white  ">Navbar</h5>
<button type="button" class="btn btn-primary" id="phonebook"  >View Contacts</button>

  <form class="form-inline d-flex">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-warning my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
       
    </div>
    <div>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">phonenumber</th>
      <th scope="col">relation</th>
    </tr>
  </thead>
  <tbody id="passbookTable">

    
    
  </tbody>
</table> 
        </div>
</body>
<style>
    

    </style>

<script>
        if (localStorage.getItem("username") == null) {
            window.location.assign("login.php");

        }
       
</script>

</html>