<?php

declare(strict_types=1);

namespace App;

use DateTime;
use Http\Client\HttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Http\Message\RequestFactory;

class EarthIsInDanger
{
    /** @var HttpClient */
    private $client;

    public function __construct(HttpClient $client)
    {
        $this->client = $client;
    }

    public function isInDanger(DateTime $dateTime)
    {
        $request = (new GuzzleMessageFactory())
            ->createRequest('GET', 'https://api.nasa.gov/neo/rest/v1/feed?start_date=2015-09-07&end_date=2015-09-08&api_key=DEMO_KEY');
        $this->client->sendRequest();
    }
}
