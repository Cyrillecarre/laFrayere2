<?php

namespace App\Service;

class PricingService
{
    private $pricesNumberOfFishers = [
        1 => [
            2 => 60,
            3 => 80,
            4 => 95,
            5 => 110,
            6 => 125,
            7 => 150,
        ],
        2 => [
            2 => 110,
            3 => 150,
            4 => 180,
            5 => 210,
            6 => 240,
            7 => 270,
        ],
    ];

    private $pricesPellets45 = [
        0 => 0,
        204 => 6.00,
        205 => 6.00,
        206 => 6.00,
        208 => 6.00,
        211 => 6.00,
        504 => 12.50,
        505 => 12.50,
        506 => 12.50,
        508 => 12.50,
        511 => 12.50,
        1004 => 20.00,
        1005 => 20.00,
        1006 => 20.00,
        1008 => 20.00,
        1011 => 20.00,
        2504 => 46.00,
        2505 => 46.00,
        2506 => 46.00,
        2508 => 46.00,
        2511 => 46.00,
    ];

    private $pricesPellets35 = [
        0 => 0,
        204 => 5.00,
        205 => 5.00,
        206 => 5.00,
        208 => 5.00,
        211 => 5.00,
        504 => 10.00,
        505 => 10.00,
        506 => 10.00,
        508 => 10.00,
        511 => 10.00,
        1004 => 18.00,
        1005 => 18.00,
        1006 => 18.00,
        1008 => 18.00,
        1011 => 18.00,
        2504 => 42.00,
        2505 => 42.00,
        2506 => 42.00,
        2508 => 42.00,
        2511 => 42.00,
    ];

    public function calculatePrice(int $numNights, int $numFishers, array $additionalProducts): float
    {
        if (!isset($this->pricesNumberOfFishers[$numFishers][$numNights])) {
            throw new \InvalidArgumentException('Price not defined for the given parameters.');
        }

        $totalPrice = (float)$this->pricesNumberOfFishers[$numFishers][$numNights];

        foreach ($additionalProducts as $product => $quantity) {
            switch ($product) {
                case 'pellets45':
                    if (isset($this->pricesPellets45[$quantity])) {
                        $totalPrice += (float)$this->pricesPellets45[$quantity];
                    } else {
                        throw new \InvalidArgumentException('Price not defined for the given product and quantity.');
                    }
                    break;
                case 'pellets35':
                    if (isset($this->pricesPellets35[$quantity])) {
                        $totalPrice += (float)$this->pricesPellets35[$quantity];
                    } else {
                        throw new \InvalidArgumentException('Price not defined for the given product and quantity.');
                    }
                    break;
                default:
                    throw new \InvalidArgumentException('Product not recognized.');
            }
        }

        return $totalPrice;
    }

    private $pricesMultiPoste = [
        2 => 350,
        3 => 460,
        4 => 560,
        5 => 645,
        6 => 700,
        7 => 760,
    ];

    public function calculateMultiPostePrice(int $numNights, array $additionalProducts): float
    {
        if (!isset($this->pricesMultiPoste[$numNights])) {
            throw new \InvalidArgumentException('Price not defined for the given duration.');
        }

        $totalPrice = (float)$this->pricesMultiPoste[$numNights];

        foreach ($additionalProducts as $product => $quantity) {
            switch ($product) {
                case 'pellets45':
                    $totalPrice += $this->calculateAdditionalProductPrice($quantity, 'pellets45');
                    break;
                case 'pellets35':
                    $totalPrice += $this->calculateAdditionalProductPrice($quantity, 'pellets35');
                    break;
                default:
                    throw new \InvalidArgumentException('Product not recognized.');
            }
        }

        return $totalPrice;
    }

    private function calculateAdditionalProductPrice(int $quantity, string $product): float
    {
        // Sélection explicite du tableau de prix selon le produit
        if ($product === 'pellets45') {
            $prices = $this->pricesPellets45;
        } elseif ($product === 'pellets35') {
            $prices = $this->pricesPellets35;
        } else {
            throw new \InvalidArgumentException('Product not recognized.');
        }

        if (!isset($prices[$quantity])) {
            throw new \InvalidArgumentException('Price not defined for the given product and quantity.');
        }

        return (float)$prices[$quantity];
    }
}


    