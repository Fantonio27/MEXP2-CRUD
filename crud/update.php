<?php
    if (isset($_POST['edit'])) {

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $datamodified = date('Y-m-d H:i:s');

        $sql = "UPDATE `user` SET `name`='$name',`email`='$email',`password`='$password',
        `address`='$address', `datamodified`='$datamodified' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Record update successfully');
                    window.location.href='index.php';
                </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>