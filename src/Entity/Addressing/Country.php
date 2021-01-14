<?php

declare(strict_types=1);

namespace App\Entity\Addressing;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Addressing\Model\Country as BaseCountry;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_country")
 */
class Country extends BaseCountry
{
	private $color;
	public function getColor(): ?string
	{
		return $this->color;
	}
	public function setColor(string $color): void
	{
		$this->color = $color;
	}
}
