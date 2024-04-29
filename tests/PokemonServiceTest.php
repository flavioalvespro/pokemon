<?php

use App\DTO\CardDTO;
use App\Support\Services\PokemonService;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class PokemonServiceTest extends KernelTestCase
{
    const POKEMON_AGGRON_ID = 'hgss4-1';
    private $service = null;

    protected function setUp(): void
    {
        self::bootKernel();

        $container = static::getContainer();
        $this->service = $container->get(PokemonService::class);
    }

    /**
     * @test
     *
     * @return void
     */
    public function testCardList(): void
    {
        $cards = $this->service->listCards();

        $this->assertIsArray($cards);
    }

    /**
     * @test
     *
     * @return void
     */
    public function testCardDetails(): void
    {
        $card = $this->service->getById(self::POKEMON_AGGRON_ID);

        $this->assertInstanceOf(CardDTO::class, $card);
    }
}