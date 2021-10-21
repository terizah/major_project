<?php
$title = "Register";
include("header.inc");
?>
<h1><?= $title ?></h1>
<?php
include("nav.inc");
?>
<div>
    <form action="process_register.php" method="post">
        <div class="form-group">
            <label for="membername">Member Name</label>
            <input type="text" name="membername" id="membername" class="form-control w-50">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control w-50">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-info" value="Register">
        </div>
    </form>
</div>

<?php
include("footer.inc");
?>