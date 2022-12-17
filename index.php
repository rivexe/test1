<?php

    require_once 'Autoload.php';

    $autoload = new Autoload;

    $route = new Router($_SERVER['REQUEST_URI']);

    if ($route->getCode() !== 200)
    {
        $html = "404";
    }
    else
    {
        $template = new Template($route->getTemplateName());

        if ($route->getHandlerClassExists())
        {
            $handlerName = $route->getHandler();
            $handler = new $handlerName;
            $html = $handler->parseContent($template->getContent());
        }
        else
            $html = $template->getContent();

    }

    $page = new Page($html);

    $page->render();