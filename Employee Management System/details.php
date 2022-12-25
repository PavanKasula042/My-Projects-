<?php
include 'apis/db.php';
include 'apis/response.php';


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Employee Details</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js"></script>
  </head>
  <body style="background-image: url('pictures/bg3.jpg')">
    <div class="container-fluid m-0 p-0">
      <header class="bg-dark">
        <div class="row p-2">
          <div class="col-md-4" type="button" onclick="location.assign('form.php')"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-left-square-fill text-warning" viewBox="0 0 16 16">
  <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1z"/>
</svg>   
            <label class="text-warning">Add Employee                                                                                                 </label>
            
          </div>
          <div class="d-flex col-md-3 align-items-center">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="46"
              height="46"
              fill="currentColor"
              class="bi bi-chevron-left text-white"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
              />
            </svg>
            <h4 class="text-white">CODESCHOOL</h4>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="46"
              height="46"
              fill="currentColor"
              class="bi bi-chevron-right text-white"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
              />
            </svg>
          </div>
          <div class="col-md-3"></div>
          <div class="col-md-2">
            <a type="button" class="btn btn-warning" id="logoutButton"
              ><svg
                xmlns="http://www.w3.org/2000/svg"
                width="26"
                height="26"
                fill="currentColor"
                class="bi bi-reply-all-fill text-dark"
                viewBox="0 0 16 16"
              >
                <path
                  d="M8.021 11.9 3.453 8.62a.719.719 0 0 1 0-1.238L8.021 4.1a.716.716 0 0 1 1.079.619V6c1.5 0 6 0 7 8-2.5-4.5-7-4-7-4v1.281c0 .56-.606.898-1.079.62z"
                />
                <path
                  d="M5.232 4.293a.5.5 0 0 1-.106.7L1.114 7.945a.5.5 0 0 1-.042.028.147.147 0 0 0 0 .252.503.503 0 0 1 .042.028l4.012 2.954a.5.5 0 1 1-.593.805L.539 9.073a1.147 1.147 0 0 1 0-1.946l3.994-2.94a.5.5 0 0 1 .699.106z"
                />
              </svg>
              logout</a
            >
          </div>
        </div>
      </header>
      <div class="row mt-3">
        <div class="box col-md-2"></div>
        <div class="boxs col-md-8 bg-white bg-opacity-75 p-4">
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Aadhar Number</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
    </tr>
  </thead>
  <tbody id="detailsTable">
  <?php
  $statement = $pdo->prepare("select e.id , e.first_name ,e.last_name ,e.aadhar_number , e.phone_number , dep.department_name , de.designation
                from employee_details e,designations de,departments dep where de.id = e.designation_id  and dep.id = e.department_id ; ");
  $statement->execute();
  $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
  if ($resultSet) {
    foreach ($resultSet as $table) {
      echo "<tr>";
      echo "<td>" . $table['id'] . "</td> ";
      echo "<td>" . $table['first_name'] . "</td> ";
      echo "<td>" . $table['last_name'] . "</td> ";
      echo "<td>" . $table['aadhar_number'] . "</td> ";
      echo "<td>" . $table['phone_number'] . "</td> ";
      echo "<td>" . $table['department_name'] . "</td> ";
      echo "<td>" . $table['designation'] . "</td> ";
      echo "</tr>";
    }
  }
  ?>
              

   
  </tbody>
</table>
        </div>
        <div class="col-3 box"></div>
      </div>
    </div>
  </body>

  <script>
    if (localStorage.getItem("username") == null) {
      window.location.assign("login.php");
    }
    $("#logoutButton").click(function () {
      localStorage.removeItem("username");
      window.location.assign("login.php");
    });
  </script>
</html>
