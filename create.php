<?php
include "db_connection.php";

if (isset($_POST["submit"])) {
    $user_name = $_POST["user_name"];
    $user_password = $_POST["user_password"];
    
    // SQL QUERY FOR ADDING A NEW USER
    $query = "INSERT INTO users (user_name, user_password) VALUES ('$user_name', '$user_password')";
    $result = $conn->query($query);

    if ($result) {
        ?>
        <script type="text/javascript">
            alert("Data Added!");
            window.location = "index.php";
        </script>
        <?php
    }
}
?>
