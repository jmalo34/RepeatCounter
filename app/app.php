<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app)
    {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_repeats", function () use($app)
    {
        $my_RepeatCounter = new RepeatCounter;
        $repeats_counted = $my_RepeatCounter->countRepeats($_GET['phrase'], $_GET['word']);
        return $app['twig']->render('repeats_counted.html.twig', array('result' => $repeats_counted));
    });

    return $app;

 ?>
