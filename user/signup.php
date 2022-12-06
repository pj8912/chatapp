<?php 
session_start();
if(isset($_SESSION['u_id'])){
    header('Location: http://localhost/chatapp/');
    exit();
}

//error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 'On');

require_once '../vendor/autoload.php';

use ChatApp\Config\Config;
use ChatApp\Templates\Template;

$template = new Template();
$template->main_header(); //header
$template->main_navbar(); //navbar
?>

<div class="container">
    <div class="card card-body mt-5 col-md-4 m-auto">
        <p align="center" class="h1 p-1"><?php echo Config::$title; ?></p><br>
        <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
            <div class="mb-2">
                <input type="text" placeholder="Fullname*" class="form-control" autocomplete="off">
            </div>
            <div class="mb-2">
                <input type="email" placeholder="Email*" class="form-control" autocomplete="off">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Username*" class="form-control" autocomplete="off">
            </div>
            <div class="mb-2">
                <input type="password"   placeholder="Password*" class="form-control">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">SignUp</button>
            </div>
        </form>
        <p align="Center" class="mt-5"> Already have an account? <a  class="text-primary" href="<?php echo Config::$home; ?>">Login</a> </p>

    </div>
</div>

<?php

$template->main_footer();
?>
