<?php

namespace App\Services\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

trait BuildBaseRequest
{
  public function buildRequestWithToken(): PendingRequest
  {
    return $this->withBaseUrl()->timeout(
      seconds: 15,
    )->withToken(
      token: $this->apiToken,
    );
  }

  public function buildRequestWithoutToken(): PendingRequest
  {
    return $this->withBaseUrl();
  }
  public function withBaseUrl(): PendingRequest
  {
    return Http::baseUrl(
      url: $this->baseUrl,
    );
  }
}
