<?php

namespace app;

use \codingbootcamp\exercises\db;
use \PDO;

/**
 * model for the notes table
 */
class Note
{
    public $id = null;
    public $title = null;
    public $text = null;
    public $short_summary = null;
    public $added_at = null;
    public $tags = null;
    public $user_id = null;

    /**
     * inserts the current object into database
     */
    public function insert()
    {
        $query = "
            INSERT INTO `notes`
            (`title`, `text`, `short_summary`, `added_at`, `tags`, `user_id`)
            VALUES
            (?, ?, ?, ?, ?, ?)
        ";
        db::query($query, [
            $this->title,
            $this->text,
            $this->short_summary,
            $this->added_at, 
            $this->tags,
            $this->user_id
        ]);
    }

    public static function find($id)
    {
        $query = "
            SELECT *
            FROM `notes`
            WHERE `notes`.`id` = ?
        ";
        $statement = db::query($query, [$id]);

        $statement->setFetchMode(PDO::FETCH_CLASS, static::class);

        // fetch first returned row
        $note = $statement->fetch();

        // return it
        return $note;
    }
}