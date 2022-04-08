<?php
include_once "../../includes/functions.php";

if(isset($_POST['updateAns'])) {
  
  $ansid = $_POST['answers'];
  $qid = $_POST['qid'];

  $returnedid = updateCorrectAnswer($ansid, $qid);

  header("location: ../options.php?id=$returnedid");
}