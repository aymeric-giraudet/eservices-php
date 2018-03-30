<?php
// api/src/Entity/SamosaShop.php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

use ApiPlatform\Core\Annotation\ApiResource;

/**
 * A shop selling samosas.
 *
 * @ORM\Entity
 * @ApiResource
 */
class SamosaShop
{
    /**
     * @var int The id of this review.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The name of this shop.
     *
     * @ORM\Column
     */
    public $name;

    /**
     * @var Samosa[] The samosas this shop is selling.
     *
     * @ORM\OneToMany(targetEntity="Samosa", mappedBy="samosaShop")
     */
    public $samosas;

    public function __construct() {
        $this->samosas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
