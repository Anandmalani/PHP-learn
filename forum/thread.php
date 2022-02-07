<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }
    </style>
    <title> Coding Forums</title>
</head>

<body>
    <?php include 'partials/dbconnect.php';?>
    <?php include 'partials/nav.php';?>
    <?php
    $id = $_GET['questionid'];
    $sql = "SELECT * FROM `ques` WHERE 'question_id'=$id"; 
    $result = mysqli_query($conn, $sql);
    echo var_dump($result);
 
        //$question_user_id = $row['question_user_id'];

        // Query the users table to find out the name of OP
        // $sql2 = "SELECT user_email FROM `users` WHERE sno='$question_user_id'";
        // $result2 = mysqli_query($conn, $sql2);
        // $row2 = mysqli_fetch_assoc($result2);
        // $posted_by = $row2['user_email'];
    
    while($row = mysqli_fetch_assoc($result)){
            $title = $row['question_title'];
            $desc = $row['question_desc'];
            echo var_dump($row);
            // <!-- Category container starts here -->
            echo '<div class="container my-4">
                <div class="jumbotron">
                    <h1 class="display-4">' . $title . '</h1>
                    <p class="lead">' . $desc . '</p>
                    <hr class="my-4">
                    <p>This is a peer to peer forum. No Spam / Advertising / Self-promote in the forums is not allowed. Do not post copyright-infringing material. Do not post “offensive” posts, links or images. Do not cross post questions. Remain respectful of other members at all times.</p>
                  
                </div>
            </div>' ;}
    
    ?>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>