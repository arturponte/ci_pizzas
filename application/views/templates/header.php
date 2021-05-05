<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ciPizzas | <?php if(isset($title)) { echo $title; } ?></title>

        <!-- TEMPLATE BOOTSTRAP -->
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/style.css">

    </head>
<body>

        <!-- NAV -->
        <div class="bg-light">
            <div class="container">
                <nav class="navbar navbar-expand navbar-light bg-light">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">ciPizzas</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>pizzas">Latest Pizzas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url(); ?>add">Add a Pizza</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>


