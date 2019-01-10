<?php 

    require_once 'vendor/autoload.php';

    use APP\Controller\HomeController;
    
    $h = new HomeController();

    $h->index();