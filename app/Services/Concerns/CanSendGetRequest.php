<?php

namespace App\Services\Concerns;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;

trait CanSendGetRequest
{
  public function get(PendingRequest $request, string $url, $apiKey = null): Response
  {
    if ($apiKey) {
      return $request->get(
        url: $url,
        query: [
          'api_key' => $apiKey
        ]
      );
    }
    return $request->get(
      url: $url
    );
  }
}
