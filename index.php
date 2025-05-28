<?php
// Set default theme if not set
if(!isset($_COOKIE['theme'])) {
    setcookie('theme', 'light', time() + (86400 * 30), "/");
    $theme = 'light';
} else {
    $theme = $_COOKIE['theme'];
}

// Get current page or default to dashboard
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
?>
<!DOCTYPE html>
<html lang="en" data-theme="<?php echo $theme; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/themes/<?php echo $theme; ?>.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- Loader CSS -->
    <link rel="stylesheet" href="assets/css/pageLoader.css">
</head>
<body>
<div id="loader-wrapper">
  <img src="./assets/images/loader.png" alt="Loading..." class="loader-image" />
</div>

<script>
  window.addEventListener("load", function () {
    setTimeout(() => {
      const loader = document.getElementById("loader-wrapper");
      loader.style.transition = "opacity 0.5s ease";
      loader.style.opacity = 0;
      setTimeout(() => loader.remove(), 500);
    }, 2000); // Show loader for 3 seconds
  });
</script>



    <div class="wrapper">
        <?php include 'includes/sidebar.php'; ?>
        
        <div class="main">
            <?php include 'includes/navbar.php'; ?>
            
            <main class="content">
                <div class="container-fluid p-0">
                    <?php
                    // Load the requested page
                    $pageFile = 'pages/' . $page . '.php';
                    if(file_exists($pageFile)) {
                        include $pageFile;
                    } else {
                        include 'pages/dashboard.php';
                    }
                    ?>
                </div>
            </main>
            
            <?php include 'includes/footer.php'; ?>
        </div>
    </div>

<div class="theme-selector">
  <button class="theme-toggle-btn"></button>
  <div class="theme-options">
    <div class="theme-option" data-theme="light">Light</div>
    <div class="theme-option" data-theme="dark">Dark</div>
    <div class="theme-option" data-theme="blue">Blue</div>
    <div class="theme-option" data-theme="green">Green</div>
  </div>
</div>
<!-- <script>
document.addEventListener("DOMContentLoaded", () => {
  const themeSelector = document.querySelector(".theme-selector");
  const toggleBtn = themeSelector.querySelector(".theme-toggle-btn");
  
  toggleBtn.addEventListener("click", () => {
    console.log("Toggle button clicked!");
    themeSelector.classList.toggle("expanded");
  });
});
</script> -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>
</body>
</html>