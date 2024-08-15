<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User Info</title>
</head>
<style>
    table {
        width: 80vw;
        text-align:center;
        justify-content:center;
        margin:auto;
        border:1px solid black;
    }
    th {
        height: 50px;
    }
    th,td {
        border: 1px solid black;
    }
    h1 {
        color: blue;
        text-align:center;
    }
    .editable {
        height: 100px;
    }
    input {
        height: 70px;
        text-align:center;
        text-decoration: disabled;
        color: gray;
    }
    .btn {
        color: white;
        background-color: blue;
        height:35px;
        border-radius: 20px;
        width: 100px;
    }
    .cancel {
        color: white;
        background-color: red;
        height:35px;
        border-radius: 20px;
        width: 100px;
    }
</style>
<body>
    <form action="update.php?user_id=<?php echo $_GET['user_id']; ?>" method="post">
        <table>
            <h1>Update User Information</h1>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2" style="color:red;">Settings</th>
            </tr>
            <?php
            include "db_connection.php";


            $query = "SELECT * FROM users WHERE user_id = '".$_GET['user_id']."' ";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                <tr class="editable">
                    <td><?php echo $row['user_id']; ?></td>
                    <td><input type="text" placeholder="<?php echo $row['user_name']; ?>" required></td>
                    <td><input type="text" placeholder="<?php echo $row['user_password']; ?>" required></td>
                    <td style="width:200px;">
                        <input type="submit" value="Save" class="btn">
                    </td>
                    <td style="width:200px;">
                        <a href="index.php"><button type="button" class="cancel">Cancel</button></a>
                    </td>
                </tr>
            <?php
                }
            }
            ?>
            
        </table>
    </form>
</body>
</html>