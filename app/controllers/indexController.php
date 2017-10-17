<?php

namespace app\controllers;

// use our implementation of view
use \codingbootcamp\tinymvc\view;

class indexController
{
    public function index()
    {
        $document = new view('document');

        // "give" the variable $content to the template
        $document->content = 'This is the homepage with some special info';

        return $document;
    }
}