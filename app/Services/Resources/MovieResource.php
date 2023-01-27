<?php


namespace App\Services\Resources;

use App\Services\TmdbService;
use Illuminate\Http\Client\Response;

class MovieResource
{

  private TmdbService $service;
  private string $apiKey;

  public function __construct(TmdbService $service, string $apiKey = null)
  {
    $this->service = $service;
    $this->apiKey = $apiKey;
  }

  public function getPopular(): Response
  {
    return $this->service->get(
      request: $this->service->buildRequestWithoutToken(),
      url: "/movie/popular",
      apiKey: $this->apiKey
    );
  }
}
