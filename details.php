<?php
$server = "localhost";
$username = "root";
$password = "";
$tableName = "ssnr_productions";
$connection = mysqli_connect($server, $username, $password, $tableName);

session_start();
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $relation = $_POST['relation'];
    $query = "SELECT * FROM voting_results";
    $put_query = "INSERT INTO voting_results(Name, Relation) VALUES('$name','$relation')";
    $result = mysqli_query($connection, $query);
    $voted_list = [];
    $count = 0;
    $_SESSION['name'] = $name; 
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($voted_list, $row['Name']);
    }
    foreach ($voted_list as $votedName) {
        if ($name === $votedName) {
            include("repeat.php");
            include("details.html");
            $count += 1;
            break;
        }
    }
    if ($count === 0) {
        $put_result = mysqli_query($connection, $put_query);
        include("success.php");
        include("demo.html");
    }
}
