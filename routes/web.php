<?php

$routes = [

    'homepage' => [
        'controller' => 'indexController',
        'action'     => 'index'
    ],

    'list' => [
        'controller' => 'notesController',
        'action'     => 'listing'
    ],

    'edit' => [
        'controller' => 'notesController',
        'action'     => 'edit'
    ]

];