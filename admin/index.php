<?php include_once "includes/header.php"; ?>
<?php include_once "../includes/functions.php"; ?>

<div class="container">
  <div class="row">
    <div class="col s8">
      <h3>Welcome to Admin Panel</h3>
    </div>
    <div class="col s4 margintop-2"><a href="addquestion.php" class="waves-effect waves-light btn"><i class="material-icons left">add_box</i>Add Question</a></div>
  </div>

  <div class="row">
    <h5>Question available:</h5>
    <table class="responsive-table highlight">
      <thead>
        <tr>
          <th>S.no</th>
          <th>Question</th>
          <th>Options</th>
          <th class="right">Answer</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = publishAllQuestion();
        $i = 1;
        while ($record = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $i; ?>.</td>
            <td><?= $record['question'];?></td>
            <td><a href="options.php?id=<?= $record['id'];?>" class="btn waves-effect waves-light blue lighten-1">See options</a></td>
            <?php if($record['answer_id'] == 0): ;?>
            <td class="right">Not Chosen</td>
            <?php else: ?>
            <td class="right"><?= getAnswerByID($record['answer_id']);?></td>
            <?php endif; ?>
          </tr>
        <?php $i++; endwhile; ?>
      </tbody>
    </table>
  </div>
  <br><br>
</div>

<?php include_once "includes/footer.php"; ?>