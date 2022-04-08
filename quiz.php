<?php include_once "includes/header.php"; ?>
<?php include_once "includes/functions.php"; ?>

<main class="container">
  <form action="quiz-eval.php" method="post">
    <div class="row">
      <br>
      <!-- Question Card -->
      <?php
      $result = publishAllQuestion();
      $i = 1;
      while ($record = mysqli_fetch_assoc($result)) : ?>
        <div class="col s12 m6">
          <div class="card light-grey darken-1 hoverable">
            <div class="card-content">
              <span class="card-title">Question No. <?= $i; ?></span>
              <p><?= $record['question']; ?></p>
              <input type="hidden" name="question<?= $record['id']; ?>" value="<?= $record['id']; ?>">
            </div>
            <div class="card-action">
              <?php 
                $resultAns = publishAllOptionsOfQuestion($record['id']);
                while ($options = mysqli_fetch_assoc($resultAns)) : ?>
              <p>
                <label>
                  <input class="with-gap" name="questionno<?= $record['id']; ?>" type="radio" value="<?= $options['answer_id']; ?>" required>
                  <span><?= $options['answer']; ?></span>
                </label>
              </p>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
        <!-- Question Card -->
      <?php $i++; endwhile; ?>

    </div>
    <button class="center-align waves-effect waves-light btn" type="submit" name="quiz_submit"><i class="material-icons right">cloud</i>Submit</button>
    <br><br>
  </form>
</main>

<?php include_once "includes/footer.php"; ?>