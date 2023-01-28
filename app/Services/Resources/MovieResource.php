<?php


namespace App\Services\Resources;

use App\Services\TmdbService;
use Faker\Core\Number;
use Illuminate\Http\Client\Response;
use Ramsey\Uuid\Type\Integer;

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

  private function getTrending(string $time_window, int $page): Response
  {
    if ($time_window === 'day') {
      return $this->service->get(
        request: $this->service->buildRequestWithoutToken(),
        url: "/trending/all/{$time_window}",
        page: $page,
        apiKey: $this->apiKey
      );
    } else {
      return $this->service->get(
        request: $this->service->buildRequestWithoutToken(),
        url: "/trending/all/{$time_window}",
        page: $page,
        apiKey: $this->apiKey
      );
    }
  }

  public function getDailyTrending(int $page): Response
  {
    return $this->getTrending('day', $page);
  }

  public function getWeeklyTrending(int $page): Response
  {
    return $this->getTrending('week', $page);
  }
}
