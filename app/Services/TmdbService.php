<?php

namespace App\Services;

use App\Services\Concerns\BuildBaseRequest;
use App\Services\Concerns\CanSendGetRequest;

class TmdbService
{

  use BuildBaseRequest;
  use CanSendGetRequest;

  private string $baseUrl;
  private string $apiKey;

  public function __construct(string $baseUrl, string $apiKey)
  {
    $this->baseUrl = $baseUrl;
    $this->apiKey = $apiKey;
  }
}
