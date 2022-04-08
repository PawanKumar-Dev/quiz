<?php include_once "includes/header.php"; ?>
<?php session_start(); ?>
<main class="container">
  <div class="row">
    <br>
    <!-- Question Card -->
    <div class="col s12 m6">
      <div class="card light-grey darken-1 hoverable">
        <div class="card-content">
          <span class="card-title">Quiz Result</span>
          <?php if ($_SESSION['showresult']) : ?>
            <p>Your Correct Answer: <?= $_SESSION['showresult']['answer']; ?></p>
            <p>Your Wrong Answer: <?= $_SESSION['showresult']['error']; ?></p>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <!-- Question Card -->
  </div>
</main>

<?php include_once "includes/footer.php"; ?>