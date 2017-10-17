<?php

namespace app\controllers;

// use our implementation of view
use \codingbootcamp\tinymvc\view;
use \app\Note;

class notesController
{
    public function listing()
    {
        // demonstration of using URI parts
        $current_uri = $_SERVER['REQUEST_URI'];
        $current_uri = trim($current_uri, '/');
        $uri_parts = explode('/', $current_uri);
        echo 'Displaying movie ' . $uri_parts[2];

        $note = Note::find(1);

        $document = new view('document');

        $list = new view('notes/list');
        $list->note = $note;
        
        // "give" the variable $content to the template
        $document->content = $list;

        return $document;
    }

    public function edit()
    {
        // if this is edit
        if(false) // false because we did not implement edit yet
        {
            // retrieve the data to be edited
            // TODO: retrieve data 
        }
        else
        {
            // prepare new, empty data for a new record
            $note = new \app\Note;
        }

        // was the form submitted?
        if($_POST)
        {
            // update the data with the submitted data
            $note->title = request('title', null);
            $note->text = request('text', null);
            $note->short_summary = request('short_summary', null);
            
            $valid = true;

            // check for title filled-in
            if(!trim($note->title)) // if the title after trimming is ''
            {
                $valid = false; // we invalidate the form
            }

            // check for text filled-in
            if(!trim($note->text)) // if the text after trimming is ''
            {
                $valid = false; // we invalidate the form
            }

            // is the updated data valid?
            if($valid)
            {
                // save
                $note->insert();

                // inform the user

                // redirect
                header('Location: /list');
                exit();
            }
        }

        $edit_form = new view('notes/edit');
        // pass whatever data fell throught the logic above into the form
        $edit_form->note = $note;

        $document = new view('document');
        
        // "give" the variable $content to the template
        $document->content = $edit_form;

        return $document;
    }
}