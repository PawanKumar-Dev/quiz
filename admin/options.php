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
      <tbody>
        <?php
        $result = publishAllOptionsOfQuestion($_GET['id']);
        $i = 1;
        while ($record = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?= $i; ?>.</td>
            <td><?= $record['answer']; ?></td>
          </tr>
        <?php $i++;
        endwhile; ?>
      </tbody>
    </table>
  </div>
  <br><br>
</div>

<?php include_once "includes/footer.php"; ?>