<?php

namespace App\Controller;

use App\Support\Services\PokemonService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CardController extends AbstractController
{
    public function __construct(private PokemonService $pokemonService){}

    /**
     * return card list
     *
     * @return Response|string
     */
    public function list(): Response|string
    {
        try {
            $cards = $this->pokemonService->listCards();
            
            return $this->render('cards/list.html.twig', [
                'cards' => $cards,
            ]);
        } catch(\Exception $e) {
            return $e->getMessage();
        }

    }

    /**
     * show details of card
     *
     * @param string $slug
     * @return Response|string
     */
    public function show(string $slug): Response|string
    {
        try {
            $card = $this->pokemonService->getById($slug);
    
            return $this->render('cards/show.html.twig', [
                'card' => $card
            ]);
        } catch(\Exception $e) {
            return $e->getMessage();
        }
    }
}