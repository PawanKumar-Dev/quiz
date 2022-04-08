<?php include_once "includes/header.php"; ?>
<?php include_once "../includes/functions.php"; ?>

<div class="container">
  <div class="row">
    <div class="col s8">
      <h4>Adding new Question</h4>
    </div>
    <div class="col s4 margintop-2"><a href="index.php" class="waves-effect waves-light btn"><i class="material-icons left">arrow_back</i>Back to Quiz Panel</a></div>
  </div>

  <div class="row">
    <form class="col s12" method="post" action="includes/submitnewquestion.php">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">create</i>
          <input id="icon_question" type="text" class="validate" name="quest" required>
          <label for="icon_question">Question</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_one</i>
          <input id="icon_option_1" type="text" class="validate" name="opt1" required>
          <label for="icon_option_1">Option 1</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_two</i>
          <input id="icon_option_2" type="text" class="validate" name="opt2" required>
          <label for="icon_option_2">Option 2</label>
        </div>
      </div>

      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_3</i>
          <input id="icon_option_3" type="text" class="validate" name="opt3" required>
          <label for="icon_option_3">Option 3</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">looks_4</i>
          <input id="icon_option_4" type="text" class="validate" name="opt4" required>
          <label for="icon_option_4">Option 3</label>
        </div>
      </div>

      <div class="row">
        <div class="col s12">
          <select name="correct_ans">
            <option selected required>Choose correct option</option>
            <option value="1">Option 1</option>
            <option value="2">Option 2</option>
            <option value="3">Option 3</option>
            <option value="4">Option 4</option>
          </select>
        </div>
      </div>

      <button class="btn waves-effect waves-light" type="submit" name="addNewQst">Add
        <i class="material-icons right">send</i>
      </button>
    </form>
  </div>
  <br><br>
</div>

<?php include_once "includes/footer.php"; ?>