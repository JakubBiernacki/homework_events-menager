<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Zalogowany: <strong><?php echo $_SESSION['username'] ?></strong></a>

        <div class="d-flex" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo Config::path ?>/events/">Twoje wydarzenia</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="<?php echo Config::path ?>/events/all.php">Nowe wydarzenia</a>
                </li>

                <?php if ($_SESSION['is_admin'] === "1") : ?>
                    <li class="nav-item">
                    <a class="nav-link active" href="<?php echo Config::path ?>/events/create.php">Dodaj wydarzenie</a>
                    </li>
                <?php endif ?>


                <li class="nav-item">
                    <a class="nav-link" href="<?php echo Config::path ?>/auth/logout.php">Wyloguj sie</a>
                </li>
            </ul>
        </div>
    </div>
</nav>