<?php

namespace Project\src\TeckCorp\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

class Mage extends Character
{
		/**
		* @ORM\BHp
		* @ORM\Column(type="integer")
		*/
		public $BHp;

		/**
		* @ORM\BMana
		* @ORM\Column(type="integer")
		*/
		public $BMana;

		/**
		* @ORM\Weapon
		* @ORM\Column(type="string")
		*/
		public $Weapon = "Basic Rode";

		/**
		* @ORM\WeaponAtk
		* @ORM\Column(type="integer")
		*/
		public $WeaponAtk;

		/**
		* @ORM\WeaponM.Atk
		* @ORM\Column(type="integer")
		*/
		public $WeaponMAtk;
}
?>
