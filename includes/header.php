<?php 
require_once("includes/config.php"); 
require_once("includes/classes/ButtonProvider.php");
require_once("includes/classes/User.php");
require_once("includes/classes/Video.php");
require_once("includes/classes/VideoGrid.php");
require_once("includes/classes/VideoGridItem.php");
require_once("includes/classes/SubscriptionsProvider.php");


$usernameLoggedIn = User::isLoggedIn() ? $_SESSION["userLoggedIn"] : "";
$userLoggedInObj = new User($con, $usernameLoggedIn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>RDKannel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src= "assets/js/commonActions.js"></script>
    <script src= "assets/js/userActions.js"></script>

</head>
<body>
    <div id = "pageContainer">

        <div id = "mastHeadContainer">
            <button class = "navShowHide">
                <img src= "assets/images/icons/menuLogo.png">
            </button>

            <a class = "logoContainer" href="index.php">
                <img src= "assets/images/icons/MainLogo.png" title = "logo" alt ="Site logo">
            </a>

            <div class = "searchBarContainer">
                <form action="search.php" method = "GET">
                    <input type="text" class = "searchBar" name = "term" placeholder = "Search...">
                    <button class = "searchButton">
                        <img src= "assets/images/icons/search.png">
                    </button>
                </form>
            </div>

            <div class = "rightIcons">
                <a href="upload.php">
                    <img class ="upload" src= "assets/images/icons/upload.png">
                </a>
                <a href="#">
                    <img class ="upload" src= "assets/images/profilePictures/default.png">
                </a>
            </div>


        </div>

        <div id = "sideNavContainer" style = "display:none;">

        </div>

        <div id = "mainSectionContainer">

            <div id = "mainContentContainer">