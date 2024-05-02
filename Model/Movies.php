<?php

class Movie
{
  public $title;
  public $plot;
  public $genres;
  public $rating;

  public function __construct(string $_title, string $_plot, array $_genres, float $_rating)
  {
    $this->title = $_title;
    $this->plot = $_plot;
    $this->genres = $_genres;
    $this->rating = $_rating;
  }

  public function getFullMovie()
  {
    echo "$this->title, $this->plot, $this->genres, $this->rating";
  }
}
