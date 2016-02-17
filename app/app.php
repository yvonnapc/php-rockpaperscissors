<?php
    require_once __DIR__."/../vendor/autoload.php";

    $app = new Silex\Application();

    $app->get("/", function() use($app){
      return "HELLO";
    });
    $app->get("/RockPaperScissors.php", function() use($app){
      return $app['twig']->render('home.html.twig', array());
    });
    
    return $app;
 ?>
