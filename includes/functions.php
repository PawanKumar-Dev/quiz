<?php 
require_once "connect.php";

// Function to publish questions
function publishAllQuestion()
{
  global $connection;

  $sql = "SELECT * FROM questions";
          
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    return $result;
  } else {
    echo "Data Fetch failed";
  }
}

function publishAllOptionsOfQuestion($q_id) {
  global $connection;

  $sql = "SELECT * FROM answers WHERE q_id = $q_id";
  $result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) > 0) {
    return $result;
  } else {
    echo "Data Fetch failed";
  }
}


function isCorrectAnswer($qid, $ansid) {
  global $connection;

  $sql = "SELECT * FROM questions WHERE id = $qid AND answer_id = $ansid";

  $result = mysqli_query($connection, $sql);
  
  if (mysqli_num_rows($result) > 0) {
    return "1";
  } else {
    return "0";
  }
}


function insertNewQust($q, $opts) {
  global $connection;

  $sql1 = "INSERT INTO questions (question) VALUES ('$q')";
  $result1 = mysqli_query($connection, $sql1);

  $qid = mysqli_insert_id($connection);

  foreach($opts as $options) {
    $sql2 = "INSERT INTO answers (answer, q_id) VALUES ('$options', '$qid')";
    $result2 = mysqli_query($connection, $sql2);
  }

  if($result1 && $result2) {
    return true;
  } else {
    return false;
  }
}



function getAllIds() {
  global $connection;

  $sql = "SELECT id FROM questions";
  $result = mysqli_query($connection, $sql);

  return $result;
}


function getAnswerByID($id) {
  global $connection;
  
  $sql = "SELECT answer FROM answers WHERE answer_id = $id";
  $result = mysqli_query($connection, $sql);

  foreach (mysqli_fetch_array($result) as $value) {
    return $value;
  }
}


function updateCorrectAnswer($ansid, $qid) {
  global $connection;
  
  $sql = "UPDATE questions SET answer_id = $ansid WHERE id = $qid";
  $result = mysqli_query($connection, $sql);

  if (mysqli_affected_rows($connection)) {
    return $qid;
  }
}
