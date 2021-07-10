<?php
session_start();

if (isset($_POST['submit'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    $tableName = "ssnr_productions";
    $name = $_SESSION['name'];
    $story = $_POST['Story'];
    $movie = $_POST['Movie'];
    $actor = $_POST['Actor'];
    $director = $_POST['Director'];
    $editor = $_POST['Editor'];
    $dubbing = $_POST['Dubbing'];
    $screenplay = $_POST['Screenplay'];
    $memer = $_POST['Memer'];
    $graphics = $_POST['Graphics'];
    $trailer = $_POST['Trailer'];
    $pre_trailer = $_POST['Pre_Trailer'];
    $child_artist = $_POST['Child_Artist'];
    $screen_pair = $_POST['Screen_Pair'];
    $bgm = $_POST['BGM'];
    $camera = $_POST['Camera'];
    $makeup = $_POST['Make_Up'];
    $character = $_POST['Movie_Character'];
    $special_appearance = $_POST['Special_appearance'];
    $connection = mysqli_connect($server, $username, $password, $tableName);
    $query = "UPDATE voting_results SET Story='$story', Movie='$movie', Actor='$actor', Director='$director', Editor='$editor', Dubbing='$dubbing', Screenplay='$screenplay', Memer='$memer', Graphics='$graphics', Trailer='$trailer', Pre_Trailer='$pre_trailer', Child_Artist='$child_artist', Screen_Pair='$screen_pair', BGM='$bgm', Camera='$camera', Make_Up='$makeup', Movie_Character='$character', Special_Appearance='$special_appearance' WHERE Name='$name'";
    mysqli_query($connection, $query);
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSNR PRODUCTIONS - Thank you</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="icon" href="favicon.ico">
</head>

<body style="background-color: black ; margin-top: 10rem;">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.html">SSNR PRODUCTIONS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="details.html">Voting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="about.html">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="main">
        <br>
        <br>
        <br>
        <br>
        <h1 style="color: blanchedalmond; text-align: center"><?php echo $_SESSION['name']?>, succesfully completed voting!!!Thanks for your precious votes.... Results will be announced soon!!! Stay tuned</h1>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
</body>

</html> 