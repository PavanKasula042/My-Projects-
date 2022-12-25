<?php

include 'db.php';
include 'response.php';
session_start();

if (!array_key_exists('username', $_POST)) {
    $response['status'] = false;
    $response['message'] = "Username is not provided";
    echo json_encode($response);
    return;
};


    $statement = $pdo->prepare("select name , phonenumber  from phonebook where username=?");
    $statement->execute([$_POST['username']]);
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
  
    $response['status'] = true;
    $response['message'] = "success";
    $response['data']=$resultSet;
    echo json_encode($response);
    $_SESSION['username'] = $resultSet[0]['username'];
return;
?>
