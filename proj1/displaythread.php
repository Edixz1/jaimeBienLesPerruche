<?php
  session_start();
  
  if(!isset($_GET["threadTitle"])){
    header("Location: error.php?ErrorMSG=Bad%20Request!");
    die();
  }

  $title=$_GET["threadTitle"];

  ///////////////////////
  $idThread = $_GET["threadID"];
  if(!isset($_COOKIE[ $idThread])){
    setcookie( $idThread,0);
  }
  else
  {
    $count = $_COOKIE[$idThread]+1;
    setcookie( $idThread, $count);    
  }
  ///////////////////////

  $content = array();
  array_push($content, "postlistview.php");
  array_push($content, "postcreateview.php");

  require_once __DIR__ . "/HTML/masterpage.php";
?>
