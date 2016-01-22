<?php

namespace Character;

use Project\src\TeckCorp\FrontBundle\Entity\Acolyte;
use Project\src\TeckCorp\FrontBundle\Entity\Archer;
use Project\src\TeckCorp\FrontBundle\Entity\Mage;
use Project\src\TeckCorp\FrontBundle\Entity\Merchant;
use Project\src\TeckCorp\FrontBundle\Entity\Sworman;
use Project\src\TeckCorp\FrontBundle\Entity\Thief;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Character
{
	/**
	* @ORM\STR
	* @ORM\Column(type="integer")
	*/
	public $STR;

	/**
	* @ORM\AGI
	* @ORM\Column(type="integer")
	*/
	public $AGI;

	/**
	* @ORM\DEX
	* @ORM\Column(type="integer")
	*/
	public $DEX;

	/**
	* @ORM\VIT
	* @ORM\Column(type="integer")
	*/
	public $VIT;

	/**
	* @ORM\INT
	* @ORM\Column(type="integer")
	*/
	public $INT;

	/**
	* @ORM\LIK
	* @ORM\Column(type="integer")
	*/
	public $LIK;

	/**
	* @ORM\ATK
	* @ORM\Column(type="integer")
	*/
	public $ATK;

	/**
	* @ORM\M.ATK
	* @ORM\Column(type="integer")
	*/
	public $MATK;

	/**
	* @ORM\DEF
	* @ORM\Column(type="integer")
	*/
	public $DEF;

	/**
	* @ORM\HEALTH
	* @ORM\Column(type="integer")
	*/
	public $HEALTH;

	/**
	* @ORM\MANA
	* @ORM\Column(type="integer")
	*/
	public $MANA;
}

?>