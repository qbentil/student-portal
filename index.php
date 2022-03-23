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
$pageTitle = "Dashboard";
$user = $_SESSION['user'][1];
$userImg = getPhoto($_SESSION["user"][0]);
$innerTitle = "Dashboard";
echo $snippets->getHead($pageTitle, $user, $userImg, $innerTitle);


// Page content 
require "includes/dashboard.php";

// page footer
echo $snippets->getFooter();