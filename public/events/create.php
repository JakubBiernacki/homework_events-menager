<?php
include_once "../../view/base/header.php";
require_once "../../module/auth/guard.login.php";

if ($_SESSION['is_admin'] !== '1') {
  header("Location: " . Config::path . "/auth/login.php");
}

$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once "../../module/events/add_events.php";
}

?>

</head>

<body>

  <?php include_once "../../view/events/navbar.php" ?>

  <div class="container">

    <form action="" method="post">

      <div class="mb-3">
        <label class="form-label">Temat</label>
        <input type="text" class="form-control" name="topic" required> 
      </div>

      <div class="mb-3">
      <label class="form-label">Typ wydarzenia</label>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type">
          <option value="Konferencja">Konferencja</option>
          <option value="Spotkanie">Spotkanie</option>
          <option selected value="Inne">Inne</option>
        </select>
      </div>

      <div class="mb-3">
        <label class="form-label">Opis</label>
        <textarea class="form-control" rows="3" name="disc" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Data</label>
        <input type="datetime-local" class="form-control" name="date" required>
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="activate" checked>
        <label class="form-check-label" >Aktywny</label>
      </div>

      <button type="submit" class="btn btn-primary">Dodaj</button>

    </form>



  </div>

  <?php include_once "../../view/base/footer.php" ?>