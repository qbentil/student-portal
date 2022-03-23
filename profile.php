<?php
require_once 'includes/processor.php';

// check if user has logged in
session_start();
if($_SESSION['loggedIn'] != session_id())
{
    header("location: login.php");
}

// Base content for dashboard
require "utilities/Snippets.php";
$snippets = new Snippets();
$pageTitle = "User Profile";
$user = $_SESSION['user'][1];
$userImg = getPhoto($_SESSION["user"][0]);
$innerTitle = "Profile";
echo $snippets->getHead($pageTitle, $user, $userImg, $innerTitle);

// Page content css
include "includes/profile.php";


changePhoto($_SESSION['user'][0]); // Function to change student profile photo

// Profile page content (HTML) being in snippet class for easy dinamism
echo $snippets->getProfile($_SESSION['user'][1], $_SESSION['user'][0], $_SESSION['user'][2], $userImg);

// page footer
echo $snippets->getFooter();