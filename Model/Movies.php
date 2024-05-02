<?php

class Movie
{
  public $title;
  public $plot;
  public $genre;
  public $rating;

  public function __construct(string $_title, string $_plot, string $_genre, float $_rating)
  {
    $this->title = $_title;
    $this->plot = $_plot;
    $this->genre = $_genre;
    $this->rating = $_rating;
  }
}
