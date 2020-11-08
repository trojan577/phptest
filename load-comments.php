<?php 
    include 'dbh.php';

    $newNumComments = $_POST['newNumComments'];

    $sql = "SELECT * FROM comments LIMIT $newNumComments";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<p>";
            echo $row['author'];
            echo "<br>";
            echo $row['msg'];
            echo "</p>";
        }
    } else {
        echo "No comments in result";
    }
?>