<?php
require_once "includes/functions.php";

ob_start();
session_start();

if(isset($_POST['quiz_submit'])) {
  
  $totalAnswer = 0;
  $totalError = 0;

  $i = 1;
  while ($i <= getCountAllQuestion()) {
    $str = "question".$i;
    $strno = "questionno".$i;

    $questionAsked = $_POST[$str];
    $optionSelected = $_POST[$strno];

    $check = isCorrectAnswer($questionAsked, $optionSelected);
    if ($check) {
      $totalAnswer++;
    } else {
      $totalError++;
    }

    $i++;
  }

  $_SESSION['showresult'] = [
    'answer' => $totalAnswer,
    'error' => $totalError
  ];

  header("location: result.php");
}