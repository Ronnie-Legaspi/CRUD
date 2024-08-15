<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h3>Add new user</h3>

    <!-- A FILLUP FORM FOR ADDING A NEW USER -->
    <form action="create.php" method="post">
        <label for="user_name">Username:</label><br>
        <input type="text" name="user_name" id="user_name"><br>
        <label for="user_password">Password:</label><br>
        <input type="password" name="user_password" id="user_password"><br>
        <input type="submit" name="submit" value="Submit">
    </form>


    <style>
        th,td {
            width: 200px;
            height: 50px;
            border: 1px solid black;
            border-collapse: collapse;
            text-align:center;
        }
        .edit {
            background-color: red;
            color: white;
        }
        .delete {
            background-color:blue;
            color: white;
        }
    </style>
    <table>
        <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>USER PASSWORD</th>
            <th colspan="2">OPERATIONS</th>
        </tr>




            <!-- READ / DISPLAYING THE USERS INFORMATION -->

        <?php
        include "db_connection.php";

        // SELECTING ALL USER'S DATA FROM THE users table
        $query = "SELECT * FROM users";
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
            ?>
        <tr>
            <td><?php echo $row['user_id']; ?></td>
            <td><?php echo $row['user_name']; ?></td>
            <td><?php echo $row['user_password']; ?></td>
            <td style="width:100px;"><a href="update_process.php?user_id=<?php echo $row["user_id"]; ?>"><button class="delete">Update</button></a></td>
            <td style="width:100px;"><a href="delete.php?user_id=<?php echo $row["user_id"]; ?>"><button class="edit">Delete</button></a></td>
        </tr>
            <?php
        }
    }

        ?>
        
    </table>




</body>
</html>
