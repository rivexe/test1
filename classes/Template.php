<?php

class Template
{

    private $path;

    private $content;

    public function __construct($dir)
    {
        
        $this->setPath($dir.'.html');

        if (file_exists($this->getPath()))
            $this->setContent(file_get_contents($this->getPath()));
        else
            $this->setContent('');
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = 'templates/'.$path;
    }

    /**
     * @return false|string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param false|string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }


}