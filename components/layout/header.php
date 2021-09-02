
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <h2> <img src="assets/images/logo-main.png" alt="Logo" class="main-logo"></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= $page === 0 ? 'active' : '' ?>">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  <?= $page === 'About Page.' ? 'active' : '' ?>">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item <?= $page === 'Services Page.' ? 'active' : '' ?>">
                        <a class="nav-link" href="services.php">Products & Services
                        </a>
                    </li>
                    <li class="nav-item <?= $page === 'Contact Page.' ? 'active' : '' ?>">
                        <a class="nav-link" href="contact.php">Contact Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>