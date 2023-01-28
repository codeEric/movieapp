<?php

namespace App\Services\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendGetRequest
{
  public function get(PendingRequest $request, string $url, int $page, $apiKey = null): Response
  {
    if ($apiKey) {
      return $request->get(
        url: $url,
        query: [
          'api_key' => $apiKey,
          'page' => $page
        ]
      );
    }
    return $request->get(
      url: $url,
      query: [
        'page' => $page
      ]
    );
  }
}
