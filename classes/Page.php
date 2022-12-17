<?php

class Page
{

    private $html;

    public function __construct($html)
    {
        $this->setHtml($html);
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * @param mixed $html
     */
    public function setHtml($html)
    {
        $this->html = $html;
    }

    public function render()
    {
        echo $this->html;
    }
}