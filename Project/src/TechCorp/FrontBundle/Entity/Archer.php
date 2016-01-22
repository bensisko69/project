<?php

namespace Game\src\MyApp\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Game\src\MyApp\EntityBundle\Entity\Character;

/**
 * myapp\AppBundle\Entity\Character
 *
 * @ORM\Entity
 */

class Archer
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
		public $Weapon = "Basic Bow";

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