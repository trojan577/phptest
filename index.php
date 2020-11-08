<?php
    include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test ground for PHP and SQL with AJAX</title>
    <script src="jquery-3.5.1.js"></script>
    <script>
        $(document).ready(function() {
            var numComments = 0;
            $("#btn").click(function() {
                numComments += 2;
                $("#comments").load("load-comments.php", {
                    newNumComments: numComments,

                }); 
            });
        });
    </script>
</head>
<body>
    <div id="comments">
        
    </div>

    <button id="btn">Click me</button>
</body>
</html>