<?php

namespace App\DTO;

class CardCollectionDTO
{
    private array $cards;

    public function __construct(
        array $data
    )
    {
        $this->cards = $data['data'];
    }

    /**
     * treat a collection of cards
     *
     * @return array
     */
    public function getCollection(): array
    {
        $cards = [];

        foreach($this->cards as $card) {
            $cards[] = new CardDTO($card);
        }

        return $cards;
    }
}