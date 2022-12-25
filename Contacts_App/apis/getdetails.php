<?php 
include 'db.php'; 
include 'response.php';

session_start();

if (!array_key_exists('username',$_SESSION)){
    $response['status'] =false;
    $response['message'] ="username is not provided.";
    echo json_encode($response);
    return;
}


try{
$statement = $pdo->prepare("select * from phonebook where username=? ");
$statement->execute([$_SESSION['username']]);
$resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);
$response['status'] = true;
$response['message'] = "success";
$response['data']=$resultSet;
echo json_encode($response);
return;
}

catch(PDOException $e){
    $response['status'] =false;
    $response['message'] = $e->getMessage();
    echo json_encode($response);
    return;
}