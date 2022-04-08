<?php
include_once "../../includes/functions.php";

if(isset($_POST['addNewQst'])) {
  $quest = $_POST['quest'];
  
  $opt = [];
  $opt[] = $_POST['opt1'];
  $opt[] = $_POST['opt2'];
  $opt[] = $_POST['opt3'];
  $opt[] = $_POST['opt4'];

  insertNewQust($quest, $opt);

  header("location: ../index.php");
}