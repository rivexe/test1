<?php

class Router
{

    private $permissibleRoutes = [
        "/" => "index",
        "/viewFile" => "datatable",
    ];

    private $route;

    private $templateName;

    private $handler;

    private $code;

    private $handlerClassExists;

    public function __construct($request)
    {

        $this->setRoute($request);

        if (array_key_exists($this->getRoute(),$this->getPermissibleRoutes()))
        {
            $this->setTemplateName($this->getPermissibleRoutes()[$this->getRoute()]);
            $this->setHandler(ucfirst($this->getTemplateName()).'Controller');
            $this->setCode(200);
        }
        else
        {
            $this->setTemplateName(null);
            $this->setHandler(null);
            $this->setCode(404);
        }
        $this->isHandlerClassExists();

    }

    /**
     * @return string[]
     */
    public function getPermissibleRoutes(): array
    {
        return $this->permissibleRoutes;
    }

    /**
     * @return mixed
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * @return mixed
     */
    public function getHandler()
    {
        return $this->handler;
    }

    /**
     * @param mixed $templateName
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @param string $route
     */
    public function setRoute(string $route)
    {
        $this->route = $route;
    }

    /**
     * @return string
     */
    public function getRoute() : string
    {
        return $this->route;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }
    /**
     * @param mixed $handler
     */
    public function setHandler($handler)
    {
        $this->handler = $handler;
    }

    /**
     * @param mixed $handlerClassExists
     */
    public function setHandlerClassExists($handlerClassExists)
    {
        $this->handlerClassExists = $handlerClassExists;
    }

    /**
     * @return mixed
     */
    public function getHandlerClassExists()
    {
        return $this->handlerClassExists;
    }
    public function isHandlerClassExists()
    {
        if (file_exists('controllers/'.$this->getHandler().'.php'))
            $this->setHandlerClassExists(true);
        else
            $this->setHandlerClassExists(false);
    }

}