<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title>Dashboard</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php

include '../login/login.php';
include '../connection/dbCon.php'

?>


</head>

<body>
    <div class="container">
        <h1>Dashboard</h1>
        <a href="../login/logins.php">Logout</a>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Age </th>
                    <th scope="col">Email</th>
                    <th scope="col">Username</th>
                    <th scope="col">Created at</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM `registration`";
                $select = mysqli_query($con, $sql);


                if (mysqli_num_rows($select) != 0) {

                    while ($row = mysqli_fetch_array($select)) {

                        ?>

                        <tr>
                            <th scope="row">
                                <?php echo $row['id']; ?>
                            </th>
                            <td>
                                <?php echo $row['Firstname']; ?>
                            </td>
                            <td>
                                <?php echo $row['Lastname']; ?>
                            </td>
                            <td>
                                <?php echo $row['Age']; ?>
                            </td>
                            <td>
                                <?php echo $row['Email']; ?>
                            </td>
                            <td>
                                <?php echo $row['Username']; ?>
                            </td>
                            <td>
                                <?php echo $row['created_at']; ?>
                            </td>
                        </tr>


                        <?php

                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
