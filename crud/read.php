<?php
    $sql = "SELECT * FROM user";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
            $address = $row['address'];
            $datacreated = $row['datacreated'];
            $datamodified = $row['datamodified'];

            ?>
            <tr>
                <td scope="row">
                    <?= $id ?>
                </td>
                <td>
                    <?= $name ?>
                </td>
                <td>
                    <?= $email ?>
                </td>
                <td>
                    <?= $password ?>
                </td>
                <td>
                    <?= $address ?>
                </td>
                <td>
                    <?= $datacreated ?>
                </td>
                <td>
                    <?= $datamodified ?>
                </td>
                <td>
                    <div class="btn-group">
                        <button type="button" id="edit-btn" onclick="GetId(<?= $id; ?>, 0)" data-bs-toggle="modal"
                            data-bs-target="#editmodal" class="edit-btn"></button>
                        <button type="button" id="btn" onclick="GetId(<?= $id ?>, 1)" data-bs-toggle="modal"
                            data-bs-target="#deletemodal" class="delete-btn"></button>
                    </div>
                </td>
            </tr>
            <?php
        }
    }
    else { 
        ?>
        <tr><td colspan="7"><h5>No Data Found</h5></td></tr>
    <?php 
    }
?>