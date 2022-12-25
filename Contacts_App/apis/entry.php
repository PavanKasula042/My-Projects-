<?php

include 'db.php';
include 'response.php';

session_start();

if (!array_key_exists('username', $_POST)) {
    $response['status'] = false;
    $response['message'] = "username is not provided";
    echo json_encode($response);
    return;
}

if (!array_key_exists('name', $_POST)) {
    $response['status'] = false;
    $response['message'] = "name is not provided";
    echo json_encode($response);
    return;
};

if(!array_key_exists('phoneNumber', $_POST)) {
    $response['status'] = false;
    $response['message'] = "phone Number is not provided";
    echo json_encode($response);
    return;
};

if(!array_key_exists('relation', $_POST)) {
    $response['status'] = false;
    $response['message'] = "relation is not provided";
    echo json_encode($response);
    return;
};

try {
    $statement = $pdo->prepare("insert into phonebook (username,name,phonenumber,relation) values (?,?,?,?)");
    $statement->execute([$_SESSION['username'],$_POST['name'], $_POST['phoneNumber'], $_POST['relation']]);
    $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

    $response['status'] = true;
    $response['message'] = "success";
   // $response['data'] = $resultSet;
    echo json_encode($response);
    return;
}
catch (PDOException $e) {
    die($e->getMessage());
} finally {
    if ($pdo) {
        $pdo = null;
    }
}



?>