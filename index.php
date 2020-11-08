<?php
include 'dbh.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .button {
            background-color: #130529;
            border-radius: 25px;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .comment-section {
            background-color: #EEEEEE;
            border-radius: 10px;
            border: solid;
        }
    </style>

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
    <div id="comments" class=comment-section>
        <br>
    </div>

    <button id="btn" class=button>Click me to load comments from database</button>
</body>

</html>