<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a href="<?php echo URLROOT; ?>/" class="navbar-brand">
            <img class="pr-1" src="<?php echo(URLROOT); ?>/img/logo_leaf2.png" alt="" title="" height="20px">
            Michael Rose's Web Development
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="<?php echo URLROOT; ?>/" class="nav-link">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo URLROOT; ?>/pages/about" class="nav-link">About</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                    </li>
                    <li class="nav-item">      
                    <p class="nav-link"><?php echo $_SESSION['user_level'] ?></p>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>