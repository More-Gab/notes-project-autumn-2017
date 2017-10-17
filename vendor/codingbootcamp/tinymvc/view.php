<?php

namespace codingbootcamp\tinymvc;

class view
{
    protected $__view_name = null;

    public function __construct($view_name)
    {
        $this->__view_name = $view_name;
    }

    public function render()
    {
        ob_start();
        
        // turn this object's properties into variables
        extract( get_object_vars($this) );

        include VIEWS_DIR . '/' . $this->__view_name . '.php';
        
        return ob_get_clean();
    }

    public function __toString()
    {
        return $this->render();
    }
}