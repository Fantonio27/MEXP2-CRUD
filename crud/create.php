<?php

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $datacreated = date('Y-m-d H:i:s');

    $sql = "INSERT INTO `user`(`name`, `email`, `password`,`address`,`datacreated`) 
    VALUES ('$name','$email','$password','$address', '$datacreated')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Record inserted successfully');
            window.location.href='index.php';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

