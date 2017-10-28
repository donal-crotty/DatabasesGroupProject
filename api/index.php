<?php

    require 'Slim/Slim.php';
    require 'database.php';
    require 'whiskeyDB.php';
    use Slim\Slim;
    \Slim\Slim::registerAutoloader();

    $app = new Slim();
    $app->get('/whiskies', 'getWhiskies');
    $app->get('/whiskies/:id', 'getWhiskeyById');
    $app->get('/whiskies/search/:query', 'getWhiskeyByBrand');
    $app->post('/whiskies', 'addWhiskey');
    $app->put('/whiskies/:id', 'updateWhiskey');
    $app->delete('/whiskies/:id', 'deleteWhiskey');
    $app->run();
?>

