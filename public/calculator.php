<?php
ini_set('diplay_errors', 1);
ini_set('html_errors', 1);

// var_dump($_GET);
//$first = $_GET["first"];
//$second = $_GET["second"];
// $op = $_GET["operator"];

//var_dump($first,$second,$op);

if ($op == "-") {
    echo "-";
    } 
    elseif ($op =="+") {
        echo "+";
    }
    elseif ($op =="*") {
        echo "*";
    } elseif ($op =="/") {
        echo "/";
    }
?>


<form>
    <input type="text" name="first">
    <input type="text" name="second">
    <input type="text" name="operator">
    <input type="submit" name="submit" value="calculate">
</form>