<?php
include "db_connection.php";

// DELETING THE USER WITH THE SPECIFIED user_id
$query = "DELETE FROM users WHERE user_id = '". $_GET['user_id']."' ";
$result = $conn->query($query);

if ($result){
    ?>
    <script type="text/javascript">
        alert("user Deleted!");
        window.location = "index.php";
    </script>
    <?php
}

?>