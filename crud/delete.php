<?php
    if (isset($_POST['delete'])) {

        $id = $_POST['id'];
        $sql = "DELETE FROM user WHERE id='$id'";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                    alert('Record deleted successfully');
                    window.location.href='index.php';
                </script>";
            header('Location: index.php');
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>

