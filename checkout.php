<?php
require_once 'includes/processor.php';
// check if user has logged in
session_start();
if($_SESSION['loggedIn'] != session_id())
{
    header("location: login.php");
}



require "utilities/Snippets.php";
$snippets = new Snippets();
$pageTitle = "Check Out";
$user = $_SESSION['user'][1];
$userImg = getPhoto($_SESSION["user"][0]);
$innerTitle = "Check Out Page";
echo $snippets->getHead($pageTitle, $user, $userImg, $innerTitle);

// Page content
require "includes/checkout.php";

// page footer
echo $snippets->getFooter();