<?php
$pageName = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-sm bg-info navbar-dark mb-5">
    <ul class="navbar-nav">
        <li class="nav-item <?php if ($pageName == "index.php") echo "active"; ?>">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php if ($pageName == "register.php") echo "active"; ?>">
            <a class="nav-link" href="register.php">Register</a>
        </li>
        <li class="nav-item <?php if ($pageName == "login.php") echo "active"; ?>">
            <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item <?php if ($pageName == "gallery.php") echo "active"; ?>">
            <a class="nav-link" href="gallery.php">Gallery</a>
        </li>
        <?php if (isset($_SESSION['username'])) { ?>
            <li class="nav-item <?php if ($pageName == "new_image.php") echo "active"; ?>">
                <a class="nav-link" href="new_image.php">New Image</a>
            </li>
            <li class="nav-item <?php if ($pageName == "logout.php") echo "active"; ?>">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php
if (isset($_SESSION['usrmsg'])) { ?>
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong>
        <?php print $_SESSION['usrmsg'];
        unset($_SESSION['usrmsg']); ?>
    </div>
<?php } ?>

<?php
if (isset($_SESSION['err'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Error!</strong>
        <?php print $_SESSION['err'];
        unset($_SESSION['err']); ?>
    </div>
<?php } ?>