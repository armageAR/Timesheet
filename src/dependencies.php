<?php

use Slim\App;

return function (App $app) {
    $container = $app->getContainer();

    $container['view'] = function ($c) {
        $view = new \Slim\Views\Twig(__DIR__ . '/../resources/views', ['cache' => false]);
        $view->addExtension(new \Slim\Views\TwigExtension(
            $c->router,
            $c->request->getUri()
        ));
        return $view;
    };
};
