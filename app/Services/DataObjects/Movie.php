<?php

namespace App\Services\DataObjects;

class Movie
{
  public int $id;
  public string $backdrop;
  public string $title;
  public string $overview;
  public string $mediaType;
  public string $releaseDate;
  public string $releaseYear;

  public function __construct(array $movieData)
  {
    $this->id = $movieData['id'];
    $this->backdrop = "https://image.tmdb.org/t/p/w500{$movieData['backdrop_path']}";
    $this->title = $movieData['title'] ?? $movieData['name'];
    $this->overview = $movieData['overview'];
    $this->mediaType = $movieData['media_type'] ?? 'Movie';
    $this->releaseDate = $movieData['release_date'] ?? $movieData['first_air_date'];
    $this->releaseYear = date("Y", strtotime($this->releaseDate));
  }
}
