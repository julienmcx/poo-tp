<?php

namespace App\Model\Entity;

use Symplefony\Model\Entity;

class Car extends Entity
{
    protected string $label;
    public function getLabel(): string
    {
        return $this->label;
    }
    public function setLabel(string $label): self
    {
        $this->label = $label;
        return $this;
    }

    protected int $seats;
    public function getSeats(): int
    {
        return $this->seats;
    }
    public function setSeats(int $seats): self
    {
        $this->seats = $seats;
        return $this;
    }

    protected int $energy;
    public function getEnergy(): int
    {
        return $this->energy;
    }
    public function setEnergy(int $energy): self
    {
        $this->energy = $energy;
        return $this;
    }

    protected string $plate;
    public function getPlate(): string
    {
        return $this->plate;
    }
    public function setPlate(string $plate): self
    {
        $this->plate = $plate;
        return $this;
    }

    protected float $price_day;
    public function getPriceDay(): float
    {
        return $this->price_day;
    }
    public function setPriceDay(float $price_day): self
    {
        $this->price_day = $price_day;
        return $this;
    }

    protected float $price;
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }
}
