<nav class="navbar navbar-expand navbar-light">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <button class="toggle-sidebar-btn me-3">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" alt="Logo" height="130">
            </a>
        </div>
        
        <div class="navbar-nav ms-auto">
            <button class="btn btn-primary me-2">
                <i class="fas fa-plus"></i> New
            </button>
            <button class="btn btn-secondary me-2">
                <i class="fas fa-upload"></i> Upload
            </button>
            <button class="btn btn-success me-2">
                <i class="fas fa-download"></i> Export
            </button>
            <button class="btn btn-danger me-2">
                <i class="fas fa-trash"></i> Trash
            </button>
            
            <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                    <img src="./assets/images/image.jpg" class="rounded-circle" alt="User" height="30">
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>