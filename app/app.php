<?php
	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/RockPaperScissors.php';

	$app = new Silex\Application();
	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app){
		return $app['twig']->render('home.html.twig');
	});

	$app->get('/play', function() use ($app){
		$plays = new RockPaperScissors($_GET['player1'], $_GET['player2']);
		return $app['twig']->render('home.html.twig', array('plays' => $plays));
	});

	return $app;
?>
