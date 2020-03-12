<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('main_controller/home'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile </a>
            </li>
        </ul>
        <ul class="navbar-nav navbar-right">
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#notificationModal" title="notification"><i class="fas fa-bell"></i></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('main_controller/logout'); ?>">Logout</a>
            </li>
        </ul>
    </div>
</nav>