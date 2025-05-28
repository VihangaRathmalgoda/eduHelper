<div class="sidebar">
    <div class="sidebar-header">
        <h3>Admin Panel</h3>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="<?php echo ($page == 'dashboard') ? 'active' : ''; ?>">
                <a href="index.php?page=dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="<?php echo ($page == 'users') ? 'active' : ''; ?>">
                <a href="index.php?page=users">
                    <i class="fas fa-users"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="<?php echo ($page == 'products') ? 'active' : ''; ?>">
                <a href="index.php?page=products">
                    <i class="fas fa-box"></i>
                    <span>Products</span>
                </a>
            </li>
            <li class="<?php echo ($page == 'orders') ? 'active' : ''; ?>">
                <a href="index.php?page=orders">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Orders</span>
                </a>
            </li>
            <li class="<?php echo ($page == 'settings') ? 'active' : ''; ?>">
                <a href="index.php?page=settings">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-footer">
        <button class="toggle-sidebar">
            <i class="fas fa-chevron-left"></i>
        </button>
    </div>
</div>