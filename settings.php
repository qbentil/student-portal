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
    $pageTitle = "Settings";
    $user = $_SESSION['user'][1];
    $userImg = getPhoto($_SESSION["user"][0]);
    $innerTitle = "Change Pin";
    echo $snippets->getHead($pageTitle, $user, $userImg, $innerTitle);

    require "includes/change-password.php";

    // page footer
    echo $snippets->getFooter();