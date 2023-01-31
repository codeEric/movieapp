<?php


namespace App\Services\Resources;

use App\Services\TmdbService;
use Illuminate\Http\Client\Response;

use App\Services\DataObjects\Movie;
use Illuminate\Support\Collection;

class MovieResource
{

  private TmdbService $service;
  private string $apiKey;

  public function __construct(TmdbService $service, string $apiKey = null)
  {
    $this->service = $service;
    $this->apiKey = $apiKey;
  }

  public function getPopular(int $page = 1): Collection
  {

    $data = $this->service->get(
      request: $this->service->buildRequestWithoutToken(),
      url: "/movie/popular",
      page: $page,
      apiKey: $this->apiKey
    );

    return collect($data->json()['results'])->map(fn ($item) => new Movie($item));
  }

  private function getTrending(string $time_window, int $page): Collection
  {
    if ($time_window === 'day') {
      $data = $this->service->get(
        request: $this->service->buildRequestWithoutToken(),
        url: "/trending/all/{$time_window}",
        page: $page,
        apiKey: $this->apiKey
      );
    } else {
      $data = $this->service->get(
        request: $this->service->buildRequestWithoutToken(),
        url: "/trending/all/{$time_window}",
        page: $page,
        apiKey: $this->apiKey
      );
    }
    return collect($data->json()['results'])->map(fn ($item) => new Movie($item));
  }

  public function getDailyTrending(int $page = 1): Collection
  {
    return $this->getTrending('day', $page);
  }

  public function getWeeklyTrending(int $page = 1): Collection
  {
    return $this->getTrending('week', $page);
  }
}
