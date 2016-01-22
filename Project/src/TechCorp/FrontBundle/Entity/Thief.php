<?php

namespace myapp\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use myapp\AppBundle\Entity\Character;

/**
 * myapp\AppBundle\Entity\Character
 *
 * @ORM\Entity
 */

class Thief
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
		public $Weapon = "Basic Dagger";

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