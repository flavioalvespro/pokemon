<?php

namespace App\Support\Services;

use App\DTO\CardCollectionDTO;
use App\DTO\CardDTO;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class PokemonService
{
    const BASE_URI = 'https://api.pokemontcg.io/v2/cards/';

    public function __construct(
        private HttpClientInterface $client,
    ) {}

    /**
     * get pokemon cards
     *
     * @return array
     */
    public function listCards(): array
    {
        $response = $this->client->request(method: 'GET', url: self::BASE_URI);
        $collection = new CardCollectionDTO($response->toArray());

        return $collection->getCollection();
    }

    /**
     * return a pokemon card by id
     *
     * @param string $slug
     * @return App\DTO\CardDTO
     */
    public function getById(string $slug): CardDTO
    {
        $response = $this->client->request(method: 'GET', url: self::BASE_URI.$slug);
        $content = $response->toArray();

        return new CardDTO($content['data']);
    }
}