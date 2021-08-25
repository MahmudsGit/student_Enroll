<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="moveto-login">
    <div class="container px-lg-5">
        <a class="navbar-brand" href="index.php"><strong><span class="text-primary">ST</span>U<span class="text-primary">D</span>ENT <span class="text-primary">EN</span>ROLLMENT</strong></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php"><i class="bi bi-house-fill" style="font-size: 1.5rem;"></i></a></li>
                <?php if (!isset($_SESSION['user_id'])){ ?>
                    <li class="nav-item"><a href="index.php#item-1" class="nav-link" "><i class="bi bi-person" style="font-size: 1.5rem;"></i></a></li>
                <?php } if (isset($_SESSION['user_id'])){ ?>
                    <li class="nav-item"><a class="nav-link" href="index.php#item-2"><i class="bi bi-pencil-square" style="font-size: 1.5rem;"></i></a></li>
                    <li class="nav-item"><a class="nav-link" href="?logout"><i class="bi bi-person-dash-fill" style="font-size: 1.5rem;"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>