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
    $pageTitle = "Transactions";
    $user = "John Doe";
    $userImg = getPhoto($_SESSION["user"][0]);
    $innerTitle = "Transactions Page";
    echo $snippets->getHead($pageTitle, $user, $userImg, $innerTitle);

    require "includes/transactions.php";

    // page footer
    echo $snippets->getFooter();