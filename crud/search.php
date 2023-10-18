<?php
    include 'db.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM user WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = [
            'id' => $row['id'],
            'name' => $row['name'],
            'email' => $row['email'],
            'password' => $row['password'],
            'address' => $row['address'],
        ];

        echo json_encode($data);
    }else{
        
        echo json_encode(0);
    }
?>