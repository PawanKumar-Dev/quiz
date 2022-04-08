<?php include_once "includes/header.php"; ?>
<?php include_once "../includes/functions.php"; ?>

<div class="container">
  <div class="row">
    <div class="col s8">
      <h3>Options of Question no <?= $_GET['id']; ?></h3>
    </div>
  </div>

  <div class="row">
    <h5>Options available:</h5>
    <table class="responsive-table highlight">
      <thead>
        <tr>
          <th>S.no</th>
          <th>Options</th>
          <th class="center">Correct Answer</th>
        </tr>
      </thead>
      <tbody>
        <form action="includes/updateAnswer.php" method="post">
          <?php
          $result = publishAllOptionsOfQuestion($_GET['id']);
          $i = 1;
          while ($record = mysqli_fetch_assoc($result)) : ?>
            <tr>
              <td><?= $i; ?>.</td>
              <td><?= $record['answer']; ?></td>
              <td class="center">
                <label>
                  <input type="hidden" name="qid" value="<?= $_GET['id']; ?>">
                  <input class="with-gap" name="answers" type="radio" value="<?= $record['answer_id']; ?>">
                  <span></span>
                </label>
              </td>
            </tr>
          <?php $i++;
          endwhile; ?>
      </tbody>
    </table>
    <br><br>
    <button class="btn waves-effect waves-light" type="submit" name="updateAns">Update
      <i class="material-icons right">send</i>
    </button>
    </form>
  </div>
  <br><br>
</div>

<?php include_once "includes/footer.php"; ?>