<?php
include './crud/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/index.css">
    <link rel="stylesheet" href="./styles/modal.css">
</head>

<body>
    <center>
        <div class="container-box ">
            <nav class="navbar">
                <h2 class="title">User Table</h2>
                <button type="button" class="create-button" onclick="GetId(0, 0)" name="createbtn"
                    data-bs-toggle="modal" data-bs-target="#editmodal">
                    + Create
                </button>
            </nav>

            <div>
                <table>
                    <thead class="thead">
                        <th scope="col">&nbsp;&nbsp;id&nbsp;</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Address</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Date Modified</th>
                        <th scope="col">Actions</th>
                    </thead>
                    <tbody>
                        <?php
                        include './crud/read.php';
                        ?>
                    </tbody>
                </table>
            </div>

            <?php
                include './modals.php';
            ?>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>

            <script src="./script/index.js"></script>
        </div>
    </center>
</body>

</html>