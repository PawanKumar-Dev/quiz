<?php
require_once "includes/functions.php";

ob_start();
session_start();

if (isset($_POST['quiz_submit'])) {

  $totalAnswer = 0;
  $totalError = 0;

  foreach (getAllIds() as $data) {
    $str = "question" . $data['id'];
    $strno = "questionno" . $data['id'];

    $questionAsked = $_POST[$str];
    $optionSelected = $_POST[$strno];

    $check = isCorrectAnswer($questionAsked, $optionSelected);
    if ($check) {
      $totalAnswer++;
    } else {
      $totalError++;
    }
  }


  $_SESSION['showresult'] = [
    'answer' => $totalAnswer,
    'error' => $totalError
  ];

  header("location: result.php");
}
