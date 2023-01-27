<?php

namespace App\Services;

class TmdbService
{
  private string $baseUrl;
  private string $apiKey;

  public function __construct(string $baseUrl, string $apiKey)
  {
    $this->baseUrl = $baseUrl;
    $this->apiKey = $apiKey;
  }
}
