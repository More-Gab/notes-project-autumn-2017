<?php

namespace app\controllers;

use \codingbootcamp\tinymvc\view;

class errorController
{
    public function error404()
    {
        $document = new view('document');
        
        // "give" the variable $content to the template
        $document->content = '404: page not found';

        return $document;
    }
}