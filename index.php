<?php session_start(); ?>

<?php

require_once 'vendor/autoload.php';
use ChatApp\Templates\Template;
$template = new Template();
//header
$template->main_header();
//navbar
$template->main_navbar();

use ChatApp\Config\Config;

?>
<div class="container">
    <div class="card card-body mt-5 col-md-4 m-auto">
    <p align="center" class="h1 p-1"><?php echo Config::$title; ?></p><br>
        <form action="user/login.php" method="post">
            <div class="mb-2">
                <input type="text" class="form-control" placeholder="Username*">
            </div>
            <div class="mb-2">
                <input type="password" class="form-control" placeholder="Password*">
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">login</button>
            </div>

        </form>
        <p align="Center" class="mt-5"> Don't Have and account? <a href="user/signup.php" class="text-success">SignUp</a> </p>
    </div>
</div>



<?php
main_footer();
?>