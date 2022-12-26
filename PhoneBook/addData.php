<?php
  if(isset($_POST["contactName"]) && isset($_POST["contactNo"])){
    $MyFile = fopen("data.txt", "a+") or die("cannot open this file");
    $data = $_POST['contactName'].",".$_POST['contactNo'];
    fwrite($MyFile, $data."\r\n");
    fclose($MyFile);
    header("Location:home.php");
  }
?>