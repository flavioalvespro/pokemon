<?php

namespace App\DTO;

class CardDTO
{
    private string $id;
    private string $name;
    private array $types;
    private array $weaknesses;
    private array $resistances;
    private array $images;
    private array $attacks;

    public function __construct(
        array $data
    )
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->types = $data['types'];
        $this->weaknesses = $data['weaknesses'] ?? [];
        $this->resistances = $data['resistances'] ?? [];
        $this->images =  $data['images'];
        $this->attacks = $data['attacks'] ?? [];
    }

    /**
     * return the id of card
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * return the name of card
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    
    /**
     * treat card's types in one string
     *
     * @return string
     */
    public function getTypes(): string
    {
        $typesString = '';
        $lastType = end($this->types);

        foreach ($this->types as $type) {
            $typesString  .= ($type == $lastType) ? $type : $type.', ';
        }

        return $typesString;
    }

    /**
     * treat card's resistances in one string
     *
     * @return string
     */
    public function getResistances(): string
    {
        $resistancesString = '';
        $lastResistance = end($this->resistances);

        foreach ($this->resistances as $resistance) {
            $resistancesString  .= ($resistance == $lastResistance) ? $resistance['type'] : $resistance['type'].', ';
        }

        return $resistancesString;
    }

    /**
     * treat card's weaknesses in one string
     *
     * @return string
     */
    public function getWeaknesses(): string
    {
        $weaknessesString = '';
        $lastWeakness = end($this->weaknesses);

        foreach ($this->weaknesses as $weakness) {
            $weaknessesString  .= ($weakness == $lastWeakness) ? $weakness['type'] : $weakness['type'].', ';
        }

        return $weaknessesString;
    }

    /**
     * treat card's attacks in one string
     *
     * @return string
     */
    public function getAttacks(): string
    {
        $attacksString = '';
        $lastAttack = end($this->attacks);

        foreach ($this->attacks as $attack) {
            $attacksString  .= ($attack == $lastAttack) ? $attack['name'] : $attack['name'].', ';
        }

        return $attacksString;
    }

    /**
     * return images of card
     *
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }
}