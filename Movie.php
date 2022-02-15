<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $cast;
    public $description;
    public $vote;

    public function set_title($input_title)
    {
        return $this->title = $input_title;
    }

    public function get_title()
    {
        return $this->title;
    }
}
