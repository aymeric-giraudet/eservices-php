<?php
// api/src/Entity/Samosa.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Annotations\Annotation\Enum as Enum;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A samosa.
 *
 * @ORM\Entity
 * @ApiResource
 */
class Samosa
{
    /**
     * @var int The id of this book.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Enum({"Triangle", "Square", "Circle", "Nonagon"})
     * @ORM\Column
     */
    public $shape;

    /**
     * @Enum({"Beef", "Pork", "Chicken", "Lamb", "Vegetarian"})
     * @ORM\Column
     */
    public $filling;

    /**
     * @var double The price of this samosa.
     * @ORM\Column(type="decimal")
     */
    public $price;

    /**
     * @var SamosaShop Samosa shop selling it
     *
     * @ORM\ManyToOne(targetEntity="SamosaShop", inversedBy="samosa")
     */
    public $samosaShop;

    public function getId(): ?int
    {
        return $this->id;
    }
}
