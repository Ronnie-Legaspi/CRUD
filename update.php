<?php
include "db_connection.php";

$user_name = $_POST['user_name'];
$user_password = $_POST['user_password'];

// UPDATING THE USER WITH THE SPECIFIED user_id
$update = "UPDATE users SET user_name = '$user_name', user_password = '$user_password' WHERE user_id = '".$_GET['user_id']."' ";
$updated = $conn->query($update);
if ($updated) {
    ?>
    <script>
        alert("User Updated");
        window.location = "index.php";
    </script>
    <?php
}

?>