<?php

/*
 *
 *  ____          
 * |  __|_              _
 * | |__| |      _    _(_)_ __   ___
 * |  __| |_   _| |  | | | '_ \ / _ \
 * | |__| | | | | |/\| | | | | | (_) |
 * |____|_|\ \/ \__/\__/_|_| |_|\___ |
 *         _|  /                 __| |
 *        |___/                 |____/
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author H4PM Team / erkam2002
 * @link http://www.github.net/H4PM
 * 
 *
*/

namespace pocketmine\block;

use pocketmine\item\Item;

class DragonEgg extends Fallable {

	protected $id = self::DRAGON_EGG;

	public function __construct(){

	}

	public function getName() : string{
		return "Dragon Egg";
	}

	public function getHardness() {
		return 3;
	}

	public function getResistance(){
		return 4.5;
	}

	public function getLightLevel(){
		return 1;
	}

	public function getDrops(Item $item) : array {
		return [
			[Item::DRAGON_EGG, 0 ,1],
		];
	}

}