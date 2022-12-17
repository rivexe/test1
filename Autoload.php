<?php

class Autoload

{
    public function __construct()
    {
        spl_autoload_register ( function ($class) {
            $sources = [
                __DIR__."/classes/$class.php",
                __DIR__."/models/$class.php",
                __DIR__."/controllers/$class.php",
            ];
            foreach ($sources as $source)
                if (file_exists($source))
                    require_once $source;
        });
    }
}