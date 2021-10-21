<?php
$title = "Login";
include("header.inc");
?>
<h1><?= $title ?></h1>
<?php
include("nav.inc");
?>
<form action="process_login.php" method="post">
    <div class="form-group">
        <label for="membername">Member Name</label>
        <input type="text" name="membername" id="membername" class="form-control w-50">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control w-50">
    </div>
    <div class="form-group">
        <input type="submit" value="Login" class="btn btn-info">
    </div>
</form>
</form>
<?php
include("footer.inc");
?>