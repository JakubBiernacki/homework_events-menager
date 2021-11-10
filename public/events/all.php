<?php
include_once "../../view/base/header.php";
require_once "../../module/auth/guard.login.php";
require_once "../../module/events/get_all_events.php";
?>

</head>

<body>

  <?php include_once "../../view/events/navbar.php" ?>

  <div class="container">

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">

      <?php foreach ($events as $event) : ?>

        <div class="col">
          <div class="card h-100">
            <!-- <img src="..." class="card-img-top" alt="..."> -->

            <div class="card-body">
              <h5 class="card-title"> <?php echo $event['topic'] ?> </h5>

              <h5>
                <span class="badge rounded-pill bg-primary"><?php echo $event['type'] ?></span>
                <span class="badge rounded-pill <?php if ($event['active']) : ?> bg-success">aktywny <?php else : ?> bg-danger">nie aktywny <?php endif ?></span>
              </h5>


              <p class="card-text"><?php echo $event['description'] ?></p>


              <div class='row row-cols-auto'>
              

              <form class='col' action="signup.php" method="post">
                <input type="hidden" name="id" value="<?php echo $event['id'] ?>">
                <button type="submit" class="btn btn-primary">Zapisz się</button>
              </form>

              


              <?php if ($_SESSION['is_admin'] === '1') : ?>

                <form class='col' action="delete.php" method="post">
                  <input type="hidden" name="id" value="<?php echo $event['id'] ?>">
                  <button type="submit" class="btn btn-danger">Usuń</button>
                </form>

              <?php endif ?>
              </div>



            </div>

            <div class="card-footer">
              <small class="text-muted"><?php echo $event['date'] ?></small>
            </div>
          </div>
        </div>

      <?php endforeach ?>
    </div>

    <?php if (empty($events)) : ?>
      <h1>Brak nowych wydarzeń</h1>
    <?php endif ?>

  </div>

  <?php include_once "../../view/base/footer.php" ?>