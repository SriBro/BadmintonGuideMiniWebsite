<?php
$servername = "localhost:3309";
$username = "root";
$password = "";
$db = "admin";

$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Database connection failed " . mysqli_connect_error());
}

$budget = $_POST["budget"];
$weight = $_POST["racket"];
$style = $_POST["play"];

$sql = "SELECT * FROM badminton WHERE budget BETWEEN ($budget - 1000) AND $budget AND weight='$weight' AND style='$style'";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error retrieving data" . mysqli_error($conn));
}

// Check if there are rows in the result set
if (mysqli_num_rows($result) > 0) {
    // Rows were found, proceed with displaying the data
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link rel="icon" type="image/x-icon" href="../images/shuttle.png">
        <title>Suggested Rackets</title>
        <style>
            body {
                background-color: aquamarine;
            }

            .nav-item {
                font-size: larger;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="../images/shuttle.png" width="30" height="30" alt="" style="border-radius:50%;">
      </a>
        <a class="navbar-brand" href="#">Badminton Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4" style="font-size: larger;">
                    <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item mr-4">
                    <a class="nav-link" href="../about.html">About</a>
                </li>
            </ul>
        </nav>
        <div class="container mt-5">
            <h1 class="text-center mb-4">Suggested Rackets</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-dark">
                    <thead>
                    <th>Budget</th>
                    <th>Weight</th>
                    <th>Style</th>
                    <th>Buy</th>
                    </thead>
                    <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><td>{$row['budget']}</td>
                                      <td>{$row['weight']}</td>
                                      <td>{$row['style']}</td>
                                      <td><a href='{$row['link']}' target='_blank'>Buy Here</a></td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
    </body>
    </html>
    <?php
} else {
    // No rows were found, redirect to error.html
    header("Location: nodata.html");
    exit(); // Make sure to stop further execution
}

mysqli_close($conn);
?>
